<?php

namespace App\Command;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'create:admin',
    description: 'Crée un utilisateur administrateur',
)]
class CreateAdminCommand extends Command
{
    private UserPasswordHasherInterface $passwordHasher;
    private UtilisateurRepository $utilisateurRepository;

    public function __construct(UserPasswordHasherInterface $passwordHasher, UtilisateurRepository $utilisateurRepository)
    {
        parent::__construct();
        $this->passwordHasher = $passwordHasher;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Création d\'un administrateur');

        $nom = $io->ask('Nom');
        $prenom = $io->ask('Prénom');
        $email = $io->ask('Email');
        $telephone = $io->ask('Téléphone');
        $password = $io->askHidden('Mot de passe');

        $utilisateur = new Utilisateur();
        $utilisateur->setNom($nom);
        $utilisateur->setPrenom($prenom);
        $utilisateur->setEmail($email);
        $utilisateur->setTelephone((int)$telephone);
        $utilisateur->setRole('ROLE_ADMIN');
        $utilisateur->setDateInscription(new \DateTime());

        $hashedPassword = $this->passwordHasher->hashPassword(
            $utilisateur,
            $password
        );
        $utilisateur->setMotDePasse($hashedPassword);

        $this->utilisateurRepository->add($utilisateur, true);

        $io->success(sprintf('Admin créé avec succès! Email: %s', $email));

        return Command::SUCCESS;
    }
}
