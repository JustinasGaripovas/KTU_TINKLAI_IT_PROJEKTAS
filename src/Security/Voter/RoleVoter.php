<?php

namespace App\Security\Voter;

use App\Entity\Employee;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class RoleVoter extends Voter
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_DOCTOR = 'ROLE_DOCTOR';
    const ROLE_LABORANT = 'ROLE_LABORANT';

    protected function supports($attribute, $subject)
    {
        return in_array($attribute, [self::ROLE_ADMIN, self::ROLE_DOCTOR, self::ROLE_LABORANT])
            && $subject instanceof Employee;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        if ($subject instanceof Employee)
        {
            /** var  Employee subject */
            return in_array($attribute, $subject->getRoles());
        }

        return false;
    }
}
