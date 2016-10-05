<?php

namespace AppBundle\Repository;

/**
 * UserHasCoursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserHasCoursRepository extends \Doctrine\ORM\EntityRepository
{
    public function findUserHasCoursByUser($id)
    {
        return $this->_em->createQuery(
            "
            SELECT DISTINCT d
            FROM AppBundle:UserHasCours h
            JOIN h.user u
            JOIN AppBundle:Cours d
            WHERE u.id=$id AND h.cours=d"
        );
    }
}
