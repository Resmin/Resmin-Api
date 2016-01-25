<?php
/**
 * @author Guven Atbakan <guven@atbakan.com>
 */

namespace ResminApiBundle\Repository;


use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;

class ThumbnailKvstoreRepository extends EntityRepository
{
    /**
     * This function is hardcoded and must be implemented by using solr or something.
     * Did this function because we need immediately.
     *
     * @param $search
     * @return null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findFromValueWithLike($search)
    {
        $query = $this->createQueryBuilder('thumbnailKvstore')
            ->select('thumbnailKvstore.key')
            ->where('thumbnailKvstore.value LIKE :search')
            ->setParameter('search', '%' . $search . '%')
            ->setMaxResults(1);

        $result = $query->getQuery()->getOneOrNullResult(AbstractQuery::HYDRATE_ARRAY);

        if (isset($result['key'])) {
            $key = explode('||', $result['key']);
            if (isset($key[2])) {
                return '/static/media/cache/97/01/' . $key[2];
            }
            return null;
        }
        return null;
    }
}