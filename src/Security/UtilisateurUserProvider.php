<?php

namespace App\Security;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UtilisateurUserProvider implements UserProviderInterface
{
    public function __construct(private UtilisateurRepository $repository)
    {
    }

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        $user = $this->repository->findOneBy(['email' => $identifier]);

        if (!$user) {
            throw new UserNotFoundException("Utilisateur avec l'email '$identifier' non trouvé");
        }

        return $user;
    }

    public function loadUserByUsername(string $username): UserInterface
    {
        return $this->loadUserByIdentifier($username);
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof Utilisateur) {
            throw new \InvalidArgumentException('Expected an instance of Utilisateur');
        }

        $refreshedUser = $this->repository->find($user->getId());

        if (!$refreshedUser) {
            throw new UserNotFoundException("Utilisateur avec l'ID '{$user->getId()}' non trouvé");
        }

        $refreshedUser->eraseCredentials();

        return $refreshedUser;
    }

    public function supportsClass(string $class): bool
    {
        return $class === Utilisateur::class || is_subclass_of($class, Utilisateur::class);
    }
}
