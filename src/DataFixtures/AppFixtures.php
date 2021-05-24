<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $game = new Game();
        $game->setName('Subnautica Below Zero');
        $game->setLogo('https://dkli3tbfz4zj3.cloudfront.net/all/201901XX_SN_BZ_Buy/20190127_SN_BZ_Logo_Horizontal_800.png');
        $game->setBackgroundImage('https://dkli3tbfz4zj3.cloudfront.net/201808_snsz_teaser/images/twitter_card.jpg');
        $game->setDuration(30);
        $manager->persist($game);
        
        $game = new Game();
        $game->setName('Cuphead');
        $game->setLogo('https://images.launchbox-app.com/93bd2967-0b5a-4323-b2a1-79bd6c0aecbc.png');
        $game->setBackgroundImage('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.rawg.io%2Fmedia%2Fresize%2F1280%2F-%2Fgames%2Fc92%2Fc92018e422f2091c2ced94be0ca839d4.jpg&f=1&nofb=1');
        $game->setDuration(10);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Clustertruck');
        $game->setLogo('https://steamcdn-a.akamaihd.net/steam/apps/397950/logo.png');
        $game->setBackgroundImage('https://www.xbox-daily.com/wp-content/uploads/2016/11/Cluster_Truck.jpg');
        $game->setDuration(6);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Spiritfarer');
        $game->setLogo('https://images.launchbox-app.com/40e6bc74-bb7b-45a9-b5aa-07f4542c9062.png');
        $game->setBackgroundImage('https://twinfinite.net/wp-content/uploads/2020/09/spiritfarer1-1.jpg');
        $game->setDuration(25);
        $manager->persist($game);

        $game = new Game();
        $game->setName('The Falconeer');
        $game->setLogo('https://cdn2.steamgriddb.com/file/sgdb-cdn/logo_thumb/18c578f830e2897ac30e2c72e6e122a1.png');
        $game->setBackgroundImage('https://compass-ssl.xbox.com/assets/f5/90/f590c383-b582-4c65-a6ec-3aaba6c5fce6.jpg?n=The-Falconeer_Feature-Image-Priority-Full-Width-0_05_1248x702.jpg');
        $game->setDuration(8);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Hollow Knight');
        $game->setLogo('https://www.tomberrymusical.fr/images/first/5cdc1906b196e_Title.png');
        $game->setBackgroundImage('https://image.api.playstation.com/vulcan/img/rnd/202010/1520/7XWcd2Kg44o1IzyY1L7czyyS.png?w=1920&thumb=false');
        $game->setDuration(40);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Tales From Space : Mutant Blobs Attack!!');
        $game->setLogo('https://images.launchbox-app.com/7a8f19cf-68cf-4fba-91dc-487cb8c9b410.png');
        $game->setBackgroundImage('https://xboxsquad.fr/wp-content/uploads/2020/04/mutant-blobs-attacks.jpg');
        $game->setDuration(4);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Super Meat Boy Forever');
        $game->setLogo('https://upload.wikimedia.org/wikipedia/fr/1/11/Super_Meat_Boy_Forever_Logo.png');
        $game->setBackgroundImage('https://www.fun-academy.fr/wp-content/uploads/2021/04/Super-Meat-Boy-Forever.jpg');
        $game->setDuration(9);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Sea of Thieves');
        $game->setLogo('https://logo-marque.com/wp-content/uploads/2021/02/Sea-Of-Thieves-Logo.png');
        $game->setBackgroundImage('https://wallpapercave.com/wp/wp2457537.jpg');
        $game->setDuration(20);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Cyberpunk 2077');
        $game->setLogo('https://www.presse-citron.net/app/uploads/2019/09/logo-cyberpunk-2077.png');
        $game->setBackgroundImage('https://jeux.ca/wp-content/uploads/2021/01/IMG_CyberpunkRabais_Banniere_AVL.jpg');
        $game->setDuration(30);
        $manager->persist($game);

        $manager->flush();

        $game = new Game();
        $game->setName('Biomutant');
        $game->setLogo('https://www.micromania.fr/on/demandware.static/-/Sites-Micromania-Library/default/dw7246484d/PagesDePrecommande/Biomutant/overview-logo-Biomutant.png');
        $game->setBackgroundImage('https://images3.alphacoders.com/901/thumb-1920-901691.jpg');
        $game->setDuration(30);
        $manager->persist($game);

        $game = new Game();
        $game->setName('Resident Evil Village');
        $game->setLogo('https://www.residentevil.com/village/assets/images/common/logo.png');
        $game->setBackgroundImage('https://store-images.s-microsoft.com/image/apps.39328.13848862280966316.e59882a3-887c-4671-8749-a40d89d528be.78d14b9d-f0f5-42ef-87d2-ee45b31fcb02?mode=scale&q=90&h=720&w=1280');
        $game->setDuration(30);
        $manager->persist($game);

        $game = new Game();
        $game->setName('The Wild at Heart');
        $game->setLogo('https://www.humblegames.com/wp-content/uploads/2020/05/Game-Logo-The-Wild-at-Heart.png');
        $game->setBackgroundImage('https://www.actugaming.net/wp-content/uploads/2021/03/the-wild-at-heart-e1617809508768.jpg');
        $game->setDuration(30);
        $manager->persist($game);

        $manager->flush();
    }
}
