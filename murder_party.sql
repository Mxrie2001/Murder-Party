-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 fév. 2023 à 00:39
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eva`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiche_perso`
--

CREATE TABLE `fiche_perso` (
  `id` int(11) NOT NULL,
  `joueur` int(11) NOT NULL,
  `background` text NOT NULL,
  `background2` text NOT NULL,
  `background3` text NOT NULL,
  `background4` text NOT NULL,
  `one_more_thing` text NOT NULL,
  `files` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fiche_perso`
--

INSERT INTO `fiche_perso` (`id`, `joueur`, `background`, `background2`, `background3`, `background4`, `one_more_thing`, `files`) VALUES
(1, 1, 'Throughout high school, you were part of a very close friend group: Charlie, Andy, Gaby, you, and Damien. Damien was your high school sweetheart. You were extremely in love with him. You had been together for about a year by the end of high school. With your friend group, it seemed like the perfect life. You 5 were \r\nalways together, had known each other since you were 11, had classes together, hung out all the time, and the \r\nlove of your life was part of the group. However, about two months before the end of high school, Damien \r\nstarted being secretive. He seemed distant, started “forgetting” to tell you things, and you started realizing \r\npeople in your friend group were talking behind your back. You got the feeling that if two of them were talking \r\nand you entered the room, they would stop talking and the atmosphere would get noticeably tenser. This wasn’t \r\nas bad when you were all together as a group, but you did feel something switch and everybody’s behaviour. For \r\na while, you could convince yourself it was because the final exams were approaching, and you were all under \r\na lot of pressure. But deep down, you knew there was something more. Something was definitely wrong with \r\nDamien. He became more scared, distant, started avoiding you. That is one you realized he might be cheating \r\non you. You also saw him talk more than once to a girl, Anna. She was in his writing club. You saw them having \r\nintense discussion twice, around May. She always had this puppy look, and he looked a mixed of worry and \r\nanger. Or something like this. You’re not sure. You couldn’t believe the love of your life could hurt you like this, \r\nbut you also didn’t see any other reason. You decided to confront him, but after the exams, because you didn’t \r\nwant to deal with a potential fight before the exams. ', 'This is when tragedy struck. Damien died. Right before the end of the year, on the 5th of June 2019, he \r\nwas coming back from wherever one night, it was dark, it was raining, he slipped and well down a crevice (you \r\nlived in an area with a lot of hills, cliffs, and crevices). He never graduated.', 'This haunted you. You regretted not confronting him before his death. For your peace of mind. This \r\nfeeling got worst when after his death, going through his stuff, you found a page of his diary. You knew he loved \r\nto write in it, it helped him deal with a lot of things. You always wanted to read it, but he said it was private, \r\nwhich you respected. The page was in his dust bin and had clearly been ripped off. In the page though, you saw \r\nthe proof that he was indeed cheating on you. No name was indicated, but you knew it was someone close to \r\nyou. You had a feeling. This is why you send the mysterious invitation. This has been haunting you for years. \r\nYou need to know who betrayed you. Who has been acting as if everything was fine, while laughing behind \r\nyour back, thinking you were too stupid to know. It’s been haunting you for 3 years now. We’ll see who will be \r\nlaughing at the end of the day. You have no clue who it might be, but you intend to scare them into thinking \r\nsomeone knows their secret, hoping they might reveal themselves. You also send an invitation to Anna of \r\ncourse, but she declined, which may be for the best anyway. That way it is just your old group. Moreover, she \r\nwas so uninteresting, the more you think about it, the less you think he could ever cheat on you with a girl like \r\nher. It’s not like anyone could actually like her, even less cheat with her. She was always so anxious; she’d never \r\ntake the risk. You also want them to think you are as clueless as everybody else, in the hopes that they will be \r\nless suspicious and make more mistakes. You do find it weird that you never found the diary. Maybe someone \r\nwent into his room before you and took it. Certainly, to hide the cheating. At least you have one page. At least, \r\nmaybe finding who took the diary could tell you who cheated.', 'Nobody knows you know Damien cheated on you, and you are pretty sure at least one of your friends \r\nmust have known he was. You were all so close to each other. How could they not have? How could they have \r\nall betrayed you like this?', '', '../assets/files/addAlex.pdf'),
(2, 2, 'Throughout high school, you were part of a very close friend group: Alex , Andy , Gaby , you, and Damien. With your friend group, it seemed like the perfect life. You 5 were always together, had classes together, \r\nhung out all the time, and Alex and Damien seemed like the perfect couple, in love. They had been together for \r\na about a year when everything happened. At least that’s what it looked like. Alex was… extremely overbearing. At first, Xe was a good ever friend, like the other 4. You knew each other since you were 11. You had spent \r\nall your teen years as a group. 1 had always been a bit… much to put it lightly. Xe clearly thought the world \r\nrevolved around them but was still nice enough that you could all be friends. But when Xe got with Damien, \r\ntheir behaviour worsened. Xe became possessive, jealous, and extremely self-centred. Everything had to be \r\nabout them. You couldn’t even talk with Damien one on one without them throwing a fit. It wasn’t surprising \r\nto you when Damien started showing signs of doubt. All of you being in your last year and having a lot of stress \r\nonly exacerbated the existing issues. You had always had a little something for him. He was incredibly good \r\nlooking, nice, funny, the perfect guy. You admit, when he started talking to you more, you were over the moon. \r\nYou knew he was with Alex , you didn’t care. You started talking more, and even flirting with him a bit via texts. \r\nHe flirted back. Then one day, you had both stayed late to study and… well you made your move. You kissed \r\nhim. And he kissed you back. This was around mid-April 2019. You too continued talking and meeting in secret, you were so happy. You finally had the guy. The perfect guy. Damien however did not break up with Alex \r\n. To be fair, even though you weren’t happy about it, you could understand. Alex was so annoying and would \r\nnever have let it go. It was much better to wait until the end of the year, so you wouldn’t have to see Alex ever \r\nagain. You had talked to Damien about it and had both agreed. You both needed to wait until after graduation \r\nto tell Alex. This was confirmed when you saw how fuming and even more unbearable when Xe saw Damien \r\ntalking to this girl, Anna. She was in your Spanish class but also in Damien’s creative writing club. They must \r\nhave been talking about whatever but Alex absolutely flipped out and acted even more jealous and possessive. \r\nYou honestly didn’t even feel bad. Alex was such a little b*tch, always complaining, always thinking they were \r\nthe centre of the universe. Moreover, Damien was clearly not feeling well. He looked anxious and stressed all \r\nthe time… expect when he was with you. Together, you were just happy. Nothing else mattered. This could have \r\nbeen a happy ending. But no. ', 'On the 6th of June, Damien’s body was found in a crevice. The night before, coming back home, he \r\nmust have slipped. It was raining, he must have been dark. When you learned his death, you felt a little piece \r\nof you die too. You even failed the final exams because you just couldn’t concentrate and had to redo the year. \r\nYou have very little memories of the month that followed. What you know is you went to see his mother once. \r\nWent in his room and passed out there until she found you. Then, you left and never talked to any of your \r\nfriends again. It was just too hard. When you received this mysterious letter, almost three years later, you just \r\nfelt enraged. Who dared bother you about an old event? An event you’d work so hard to move on from. You \r\ndecided to join. First because you are pretty sure this person wants to reveal you had a secret relationship with \r\nDamien. Not that you care if people knew, but you never wanted to give 1 the satisfaction to play victim. You \r\nknow 1 also received the same letter as you. You don’t think they could have orchestrated all this. They certainly \r\nhad no idea Damien didn’t love them anymore. They clearly though they were way to good for anyone to not \r\nbe in love with them. You still need to decide if you want to reveal your affair with Damien. On the one end, it \r\nwould hurt Alex to know they were not the most important person in the world, and you would honestly like \r\nthis. On the other hand, this would give them the opportunity to play the victim, which you would hate. This \r\nis your choice to make. ', '', '', '', '../assets/files/addCharlie.pdf'),
(3, 3, 'Throughout high school, you were part of a very close friend group: Alex, Charlie, Gaby, you, and \r\nDamien. With your friend group, it seemed like the perfect life. You 5 were always together, had classes \r\ntogether, hung out all the time, and Alex and Damien seemed like the perfect couple, in love. They had \r\nbeen together for a about a year when everything happened. At least that’s what it looked like. Alex was… \r\nextremely overbearing. At first, Xe was a good ever friend, like the other 4. You knew each other since you \r\nwere 11. You had spent all your teen years as a group. Alex had always been a bit… much to put it lightly. \r\nXe clearly thought the world revolved around them but was still nice enough that you could all be friends. \r\nBut when Xe got with Damien, their behaviour worsened. Xe became possessive, jealous, and extremely \r\nself-centred. Everything had to be about them. You couldn’t even talk with Damien one on one without \r\nthem throwing a fit. You had always been a bit “drama-free” and honestly didn’t care to much about what \r\nwas happening between everyone. You, however, were never stupid. You saw it when Damien started distancing himself from Alex and getting closer to Charlie. It was obvious something was happening between \r\nthe two of them. But once again, you didn’t really care enough to get involved. Those people were mostly \r\ngood to hang out at school and not be alone. You never really planned to keep much contact. Alex was selfcentred, Charlie almost cruel if not sadistic (you’re pretty Xe liked seeing drama unfollowed and people get \r\nhurt, especially when they didn’t like said person), Gaby was way too ambitious and capable of anything \r\nto reach their goals, even letting down friends and Damien... well, you should not speak ill of the dead \r\nanyway. A bit of a coward certainly, oblivious to the point where he could hurt people and make stupid decisions, but he was still certainly your favourite of the bunch. The less bad at least. Which is why it is really \r\na shame. ', 'Late on the 5th of June 2019, Damien was coming back from somewhere when he slipped and felt \r\nin a crevice. It was dark, it was raining, it was an accident. At least this is the official version. You always \r\nsuspected something more. To many things don’t work. Before his death, Damien looked increasingly \r\nanxious. You don’t believe it was because of whatever was happening with him, Alex and Charlie, because \r\nthe whole story started way before from what you can tell. You also don’t think it was the exams… nobody looks this scared and anxious because of exam stress. It was different. Before his death, the morning \r\nof the 5th, when you crossed paths in the corridor, he told you he had something to reveal, but he’d do it \r\nafter talking to one more person. You were intrigued and did ask some questions, but he refused to answer \r\nanything and just left. That was the last time you saw him. After his death, you tried to learn more, even \r\nwent to his mother to look through his stuff hoping to find clues, but it was a dead end. You did find it very \r\nweird that you couldn’t find his diary. You knew he wrote everything in his diary. He either threw it away \r\nbefore dying, but why? Or someone took it, which only enforces the idea that something more happened \r\nthat night. Moreover, no one was able to figure out where he was before he died. This is yet another mystery \r\nto solve. And you absolutely love mysteries. ', 'This is why, when you received this letter promising to reveal a secret, you were intrigued and even \r\nexited. To be perfectly honest, you have been dying of boredome this past year. University is not what \r\nyou imagined it would be, and you have been having this gut wrenching sensation that something big \r\nis missing from your life. But finally... Somebody else believes something was wrong! You can’t help but \r\nhope there is a mystery to be solved. You have been waiting for somethign to do, something to make you \r\nfeel again. Those people migth not have been very useful to you during highschool, but they might finally \r\nprovide you with the thrill you are missing. You want to play, more than anythign else, and you hope that \r\nyou finally found a game good enough not to bore you. You quickly contacted everyone from your old \r\ngroup friends, since you are sure of something, the mystery revolves around at least one of them. Indeed, \r\nthey all received the same letter. Now, this is you cue to tried to bring the true events of that night to light. \r\nFor you this is nothing but a game, slightly macabre you concede, but a game you intend to play and more \r\nimportantly: win.', '', 'Before coming here, you made sure to check and update the phone numbers of everyone at your old school \r\nand other people of interest. Don’t hesitate to give them a call, although they might not all answer. \r\nOne thing though, you mobile plan is weird, and you must leave a minimum of 15 min between each call you \r\nmake. Even if the person you called does not answer, too bad, you can’t try about before 15 min have passed. \r\nAs long as you hold on the list you made, you are the only one that can decide to call someone, others can \r\ngive their opinion, but ultimately, only you decide, it is your call. Choose wisely, and good luck.', '../assets/files/addAndy.pdf'),
(4, 4, 'Throughout high school, you were part of a very close friend group: Alex, Charlie, Andy, you, and Damien. \r\nWith your friend group, it seemed like the perfect life. You 5 were always together, had classes together, hung out all \r\nthe time, and Alex and Damien seemed like the perfect couple, in love. They had been together for a about a year \r\nwhen everything happened. At least that’s what it looked like. Alex was… extremely overbearing. At first, Xe was \r\na good ever friend, like the other 4. You knew each other since you were 11. You had spent all your teen years as a \r\ngroup. Alex had always been a bit… much to put it lightly. Xe clearly thought the world revolved around them but \r\nwas still nice enough that you could all be friends. But when Xe got with Damien, their behaviour worsened. Xe \r\nbecame possessive, jealous, and extremely self-centred. Everything had to be about them. You couldn’t even talk \r\nwith Damien one on one without them throwing a fit. Honestly you didn’t care to much about what was happening \r\nbetween everyone. You had your own goals. You wanted to get in a very prestigious university and would have done \r\nanything to achieve your dreams. However, you quickly realized you did not have good enough grades to do so. \r\nNo matter how much you worked. That when you got an idea. The university had a special “future writing talent” \r\nsection, meaning that you could submit a short story, and the best would get a spot, even if the grades were a bit \r\nunderneath the usual requirements. Which would allow you to get in. You then looked for a tutor, because you never really were interested in creative writing, The tutor you found was a girl named Anna, she was in your year and \r\nin the creative writing club of your high school. She was pretty good. However, you quickly realized you’d never be \r\ngood enough in time to submit. That’s when you started panicking. You couldn’t even fathom a world where you \r\ncouldn’t get in this uni. Your life would be over, you had no other options. You always went at Anna’s for the tutoring, \r\nand one time, you snooped though her computer while she left you alone to fetch something. You found her short \r\nstory folders, took one at random that she hadn’t written to recently but also not too long ago, and took pictures of \r\nit. You then simply submitted it as your story. And it worked, you got the spot at university. ', 'However, turns out Damien knew Anna, he was also in this creative writing club. Then, when you told them \r\nyou had gotten in your uni, he started asking question. He must have known your grades were a bit low. You told \r\nhim you had submitted a short story. He kept asking more questions and ended up wanting to read the story. You \r\ndid the mistake of showing him. You didn’t think he could recognize the story; you didn’t know Anna had shown \r\nthis short story in the club. After that Damien started harassing you, telling you to withdraw your place from university, to “make things right”. But you had worked hard for this spot! You deserved it! And this pretentious little rich \r\nboy wanted to take this away from you! For a month he kept pressuring you. You did ask him not to tell anyone, told \r\nhim it didn’t matter, but he didn’t seem convinced. In all came to a head 1 month later. The 5th of June to be precise. \r\nDamien took you apart at school and told you to meet him at a park near your home after class. He told you he had \r\nsomething important to tell you. Of course, you went. He said he was going to tell everybody what you did. That he \r\nhadn’t told anyone for now, but he would tomorrow. You begged him not too. You try to make him see your point of \r\nview, but he just wouldn’t listen. He had always been this selfish. Always putting “the right thing” in front of everything else, but you didn’t think he would actually throw his own friend under the bus for something so insignificant. \r\nYou couldn’t withdraw, you had no plan B. And revealing you didn’t write the story would go on your permanent \r\nrecord, get you expelled and prevent you from getting any good opportunity in the future. He wouldn’t budge, and \r\nleft saying the discussion was closed, and that if you hadn’t withdrawn by tomorrow, he would tell everyone starting \r\nwith your friends. You felt your blood boil. You saw him walking away and just wanted to punch his little smug face. \r\nYou followed him. You’re not sure why. You just did. For a while. Until he turned around and started yelling at you. \r\nAsking why you were following him. Why you were being a creep. ', 'You pushed him. You didn’t even realize there was a cliff behind him. You saw him disappear and didn’t even \r\nlook back. You just ran. It couldn’t have been later than 9. They found his body the next day. They concluded it was \r\nan accident; it was dark, it was rainy. No one ever figured he met you before his death. No one knew. You were free \r\nto attend university like you always dreamed, like you deserved. You did remember in time that he used to write \r\neverything in a diary, so you simply went to his mother’s house, asked to go to the bathroom and used this moment \r\nto sneak in his room and steal the diary. Diary that has long been destroyed by now. You were then able to move on \r\nfrom this all thing and live your best life at university. ', 'This is why you were extremely mad to receive this letter. Who dared bother you once again with this old and insignificant story? Of course, you had to accept the invitation, and you are ready to do anything to finally put this all \r\nthing behind you. ', 'You brought with you a cyanide pill. You are prepared to do anything to prevent your secrets from coming to \r\nlight, this includes killing again. You can use this pill however you want, but only once. It is simple to use. The \r\nfirst person (other than yourself) to read it, will be dead. This also need that, like any poison, your target might not be the first one to eat/drink/see the poison. This is why you must be careful; you only have one. One \r\nlast warning: ghosts may be able to talk, so be careful that no one, even your victim, sees you. Good luck.', '../assets/files/addGaby.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `infos_joueurs`
--

CREATE TABLE `infos_joueurs` (
  `id` int(11) NOT NULL,
  `joueur` int(11) NOT NULL,
  `perso` varchar(50) NOT NULL,
  `perso_infos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos_joueurs`
--

INSERT INTO `infos_joueurs` (`id`, `joueur`, `perso`, `perso_infos`) VALUES
(1, 1, 'Charlie', 'Always had a smug little smile. Not \r\neven that intelligent. Failed the high \r\nschool exams after Damien’s death \r\nand had to re do a year. Lost contact \r\nand you absolutely do not care'),
(2, 1, 'Andy', 'Nice and chill, was always a bit in the \r\nperiphery of the group. Was the one \r\nwho contacted everyone after you \r\nreceived the letter. You have no clue \r\nwhat they did after high school and \r\nfrankly don’t care that much. '),
(3, 1, 'Gaby', 'Pretty indifferent, they were always \r\nangry about something, which you \r\nthought was too tiring to deal with. \r\nOnce again, you don’t know where \r\nthey went after high school, and don’t \r\ncare. Although you do seem to recall \r\nit was pretty prestigious.'),
(4, 2, 'Alex', 'A self-centred little piece of sh*t. Was \r\nwith Damien the last year of high \r\nschool, acted all sad after his death, \r\nbut seemed more preoccupied about \r\nthemselves than about his actual \r\ndeath.'),
(5, 2, 'Andy', 'Nice and chill, was always a bit in the periphery of the group. Was the one who \r\ncontacted everyone after you received \r\nthe letter. Was always pretty calculating, \r\nyou truly believe Xe was the most intelligent of you five, even though they did \r\nnot end up doing the best studies, 4 did.'),
(6, 2, 'Gaby', 'Had very few friends out of you but \r\ndidn’t really seem to care. Was always \r\nextremely ambitious and could do \r\nanything to achieve their goals. \r\nAlways seem angry or annoyed at something though but was also pretty \r\ngood at hiding their true feelings.'),
(7, 3, 'Alex', 'Self-centred, whiney, oblivious to everyone around \r\nthem.'),
(8, 3, 'Charlie', 'Always had a smug little \r\nsmile. Failed the high school \r\nexams after Damien’s death \r\nand had to re do a year, you \r\nare not very sure of what they \r\ndid after that.'),
(9, 3, 'Gaby', 'Very ambitious, could do \r\nanything to reach their goal. \r\nGot in a really good uni, actually a lot better than what \r\nyou would have bet. They \r\nnever had the best grades in \r\nschools but got in this school \r\nby submitted a short story \r\nthat was apparently so good \r\nthe grades didn’t count. You \r\ndidn’t know they liked writing at the time but good for \r\nthem. '),
(10, 4, 'Alex', 'Self-centred, whiney, oblivious to everyone around \r\nthem, Damien’s partner during the last school year, you \r\nnever really understood why \r\nDamien got with them, you \r\nalways found them very annoying and whiney.'),
(11, 4, 'Charlie', 'Always had a smug little \r\nsmile. Failed the high school \r\nexams after Damien’s death \r\nand had to re do a year, you \r\nare not very sure of what they \r\ndid after that. To their credit, \r\nDamien’s death really seemed \r\nto affect them a lot.'),
(12, 4, 'Andy', 'Nice and chill, was always a bit \r\nin the periphery of the group. \r\nWas the one who contacted \r\neveryone after you received \r\nthe letter. Was always pretty \r\ncalculating, and intelligent, \r\ntop of the year. You were \r\nalways very proud to get in \r\na better uni then they did. \r\nYou always wondered if they \r\nwere not a bit jealous of you \r\nbecause of it, not that you actually cared.');

-- --------------------------------------------------------

--
-- Structure de la table `phone_time`
--

CREATE TABLE `phone_time` (
  `id` int(11) NOT NULL,
  `date_derniere_co` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `phone_time`
--

INSERT INTO `phone_time` (`id`, `date_derniere_co`) VALUES
(1, '2022-02-21 14:04:41');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `email`, `pwd`) VALUES
(1, 'Alex', 'Alex@gmail.com', '$2y$10$V2BWXw57Ld4RD8XCp3u7Qe.scs9qIyyPp/mDXNp.arWeRfU0ayIG.'),
(2, 'Charlie', 'Charlie@gmail.com', '$2y$10$TKuAqlwYJkIE1PxbbNzNUeIp4w9lcCIgkk2tr9QA9OqFSX31VmwVe'),
(3, 'Andy', 'Andy@gmail.com', '$2y$10$NP75gWpk6x4TI5lbq8AB7uSqbNuo0YVyvapu0wURHkuHU2qKe0bCy'),
(4, 'Gaby', 'Gaby@gmail.com', '$2y$10$XGWitGFiAB.jQ3sXN8n5hOlG4BH9qnTtT2eNnIEscSOLWCuFOS25S');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fiche_perso`
--
ALTER TABLE `fiche_perso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_joueurs` (`joueur`);

--
-- Index pour la table `infos_joueurs`
--
ALTER TABLE `infos_joueurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_joueur` (`joueur`);

--
-- Index pour la table `phone_time`
--
ALTER TABLE `phone_time`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche_perso`
--
ALTER TABLE `fiche_perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `infos_joueurs`
--
ALTER TABLE `infos_joueurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `phone_time`
--
ALTER TABLE `phone_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fiche_perso`
--
ALTER TABLE `fiche_perso`
  ADD CONSTRAINT `fk_joueurs` FOREIGN KEY (`joueur`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `infos_joueurs`
--
ALTER TABLE `infos_joueurs`
  ADD CONSTRAINT `fk_joueur` FOREIGN KEY (`joueur`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
