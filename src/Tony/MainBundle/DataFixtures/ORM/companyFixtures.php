<?php

namespace Tony\MainBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tony\MainBundle\Entity\Company;

class companyFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(Objectmanager $manager){
        $Company1= new Company();
        $Company1->setName('JC Technologies');
        $Company1->setImage('JCTech.png');
        $Company1->setUrl('www.jc-tech.net');
        $Company1->setDescription('JC Technologies is a full service IT company, serving the businesses in South Florida. Our IT services cover the cities of Broward County, Miami-Dade County, Palm Beach County including Ft.Lauderdale, Pompano Beach, Cooper City, Dania, Davie, Plantation, Hollywood, Parkland Park, Deerfield Beach, Miramar, Margate, Boca Raton, Delray Beach, Hillsboro Beach, Aventura, Pembroke Pines, Hallandale, Sunrise, Tamarac, Weston, Lauderhill, Lauderdale-by-the-Sea, Coral Springs, Parkland, North Miami Beach and throughout Florida.');
        $Company1->setCreated(new \DateTime());
        $Company1->setUpdated($Company1->getCreated());
        $manager->persist($Company1);

        $Company2= new Company();
        $Company2->setName('J.P.Morgan');
        $Company2->setImage('JPMorgan.jpg');
        $Company2->setUrl('www.JPMorganChase.com');
        $Company2->setDescription('JPMorgan Chase & Co., headquartered in New York, is a leading global financial firm, providing financial services including investment banking, markets business such as fixed income, equities and foreign exchange, as well as treasury services, investor services, asset management, private banking, commercial banking, and consumer/community banking.');
        $Company2->setCreated(new \DateTime());
        $Company2->setUpdated($Company2->getCreated());
        $manager->persist($Company2);

        $Company3= new Company();
        $Company3->setName('STIGroup');
        $Company3->setImage('STI.png');
        $Company3->setUrl('www.stigroup.com');
        $Company3->setDescription('STIGroup is an Information Security & Infrastructure Consulting firm with clients located throughout the Northeast but concentrated in the NYC area. We perform strategic Information Security & Infrastructure consulting services for our clients as well as technical design, implementation, and troubleshooting services for a variety networking, system, and security technologies.');
        $Company3->setCreated(new \DateTime());
        $Company3->setUpdated($Company3->getCreated());
        $manager->persist($Company3);

        $Company4= new Company();
        $Company4->setName('DSA');
        $Company4->setImage('DSA.jpg');
        $Company4->setUrl('www.dsainc.com');
        $Company4->setDescription('Data Systems Analysts, Inc. is an established Information Technology consulting firm with expertise in knowledge management, network engineering, information security and program management serving the Federal Government and Department of Defense since 1963.');
        $Company4->setCreated(new \DateTime());
        $Company4->setUpdated($Company4->getCreated());
        $manager->persist($Company4);

        $manager->flush();

        $this->addReference('Company-1', $Company1);
        $this->addReference('Company-2', $Company2);
        $this->addReference('Company-3', $Company3);
        $this->addReference('Company-4', $Company4);
    }

    public function getOrder()
    {
        return 1;
    }

}