<?php

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BlogRepository extends EntityRepository
{

    public function findAllBlogCount()
    {
        $query = $this->createQueryBuilder('b');
        $query->select("count(b)");
        return $query->getQuery()->getOneOrNullResult();
    }

    public function findBlog(array $context = [])
    {
        $query = $this->createQueryBuilder("b");
        $query->select("b");
        $query->setMaxResults(5);
        $query->orderBy("b.id", "DESC");

        $page = 0;

        if(isset($context["page"]) && is_numeric($context["page"]))
        {
            $page = 5 * ($context["page"] - 1);

        }

        $query->setFirstResult($page);

        return $query->getQuery()->getResult();
    }
}
