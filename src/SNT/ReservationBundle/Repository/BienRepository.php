<?php

namespace SNT\ReservationBundle\Repository;

/**
 * BienRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BienRepository extends \Doctrine\ORM\EntityRepository
{
    public function findBien($lieu = '', $typeBien = '', $prixMin = '', $prixMax = '', $meuble = '', $balcon = '', $parking = ''): array
    {
        $em = $this->getEntityManager();
        $requete = 'SELECT B.id, B.nomBien, B.balcon, B.meuble, B.adresse, B.prixLoc, B.surface, B.nbreChambre, B.nbreEtage, B.nbreSalon, B.nbreSallebain,B.description, B.parking, I.chemin, TB.nomTypeBien, Q.nomQuartier, V.nomVille
        FROM SNT\ReservationBundle\Entity\Bien B, SNT\ReservationBundle\Entity\typeBien TB, SNT\ReservationBundle\Entity\image I, SNT\ReservationBundle\Entity\quartier Q, SNT\ReservationBundle\Entity\ville V
        WHERE B.disponibilite = true
        AND B.quartier = Q.id
        AND Q.ville = V.id
        AND B.typeBien = TB.id
        AND I.idBien = B.id';

        if ($lieu != null) {
            $requete .= ' AND B.quartier IN (SELECT Qua.id FROM SNT\ReservationBundle\Entity\quartier Qua WHERE Qua.ville IN (SELECT Vil.id FROM SNT\ReservationBundle\Entity\ville Vil WHERE Vil.id = :lieu))';
        }

        if ($typeBien != null) {
            $requete .= ' AND B.typeBien = :typeBien';
        }

        if ($prixMin != null && $prixMax != null) {
            $requete .= ' AND B.prixLoc BETWEEN :prixMin AND :prixMax';
        }

        if ($meuble != null) {
            $requete .= ' AND B.meuble = true';
        }

        if ($balcon != null) {
            $requete .= ' AND B.balcon = true';
        }

        if ($parking != null) {
            $requete .= ' AND B.parking = true';
        }

        $query = $em->createQuery($requete);

        if ($lieu != null) {
            $query->setParameter('lieu', $lieu);
        }
        if ($typeBien != null) {
            $query->setParameter('typeBien', $typeBien);
        }
        if ($prixMin != null && $prixMax != null) {
            $query->setParameter('prixMin', $prixMin)
            ->setParameter('prixMax', $prixMax);
        }

        return $query->execute();
    }

    public function findBienById($id): array
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT B.id, B.nomBien, B.balcon, B.meuble, B.adresse, B.prixLoc, B.surface, B.nbreChambre, B.nbreEtage, B.nbreSalon, B.nbreSallebain,B.description, B.parking, I.chemin, TB.nomTypeBien, Q.nomQuartier, V.nomVille
            FROM SNT\ReservationBundle\Entity\Bien B, SNT\ReservationBundle\Entity\typeBien TB, SNT\ReservationBundle\Entity\image I, SNT\ReservationBundle\Entity\quartier Q, SNT\ReservationBundle\Entity\ville V
            WHERE B.disponibilite = true
            AND B.id = :id
            AND B.quartier = Q.id
            AND Q.ville = V.id
            AND B.typeBien = TB.id
            AND I.idBien = B.id'
        )->setParameters(array('id' => $id));

        return $query->execute();
    }
}
