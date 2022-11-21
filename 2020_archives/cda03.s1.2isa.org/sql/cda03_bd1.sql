-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 27 août 2020 à 12:02
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  7.3.0-2+0~20181217092615.24+jessie~1.gbp54e52f

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cda03_bd1`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `IdActivite` int(11) NOT NULL,
  `IntituleActivite` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `DDebut` date DEFAULT NULL,
  `DFin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4,
  `TarifAdherent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `TarifInvite` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `DLimite` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `IdAdherent` int(11) NOT NULL,
  `IdType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `IdAdherent` int(11) NOT NULL,
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `DNaiss` date NOT NULL,
  `Adresse1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Adresse2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `CdPost` varchar(5) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Tel` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `DAdhesion` date NOT NULL,
  `Organisateur` tinyint(1) DEFAULT '0',
  `Avatar` varchar(100) COLLATE utf8_bin NOT NULL,
  `Avatar_blob` longblob NOT NULL,
  `Avatar_type` varchar(100) COLLATE utf8_bin NOT NULL,
  `Login` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `certificat` varchar(50) COLLATE utf8_bin NOT NULL,
  `droit_image` tinyint(1) NOT NULL DEFAULT '0',
  `cylindree` varchar(50) COLLATE utf8_bin NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`IdAdherent`, `Nom`, `Prenom`, `DNaiss`, `Adresse1`, `Adresse2`, `CdPost`, `Ville`, `Email`, `Tel`, `DAdhesion`, `Organisateur`, `Avatar`, `Avatar_blob`, `Avatar_type`, `Login`, `Password`, `certificat`, `droit_image`, `cylindree`, `Admin`) VALUES
(1, 'Martin', 'Robert', '1980-01-22', 'test adresse', NULL, 'Test ', 'test ville', 'test@test.com', 'test tel', '0000-00-00', 0, '', '', '', 'ma22', 'test', '1', 1, '250 cm3', 0),
(4, 'Atiff', 'Jean', '1980-01-22', 'test adresse', NULL, 'Test ', 'test ville', 'test@test.com', 'test tel', '0000-00-00', 0, '', 0xffd8ffdb008400080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffc000110800c800c803012200021101031101ffc401a20000010501010101010100000000000000000102030405060708090a0b100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9fa0100030101010101010101010000000000000102030405060708090a0b1100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffda000c03010002110311003f00d50c29435420e07a0a5cfb542d4c6ec9b229c0e4715083d3b52e4f1cd02260691951ba8c5341f5a703421919b4c67637e74d30cb8fbb9ab21f8a72b71d6a8562832b03ca914c6078e38ad4cf238a8ae27b7b685a598aac6a39cd1a8725cc59b9b86f4000a72607b5655d78934f8a691990f27855f4aa87c5b67fc36f29ff008152706f60b58e85986de2b43441b5a2cf68ff00a5718de2bb7662a2da4d9eedcd6ee8be20b5203f207dd23b8ace54e48da968eecee2c9d3c8b9675cf38ac8d7e48469857fbcdfcb9a9edaea37b49152552c5b38079ae7fc406679a0d8f98c065653d3279fe95e76223cf888791db425cacdcd0a26f2524073132753deba9550b6d1e0d719e1f9651a2daf1c6d3d3fde35d744e4db46a7d3bd561db9e226ec4cf624cd483a5440f634e06bd1332643915229c7535003c53c3114c9b13834e0dd2a20dc52834c44e1a9775439fce8cb51603cd41c8e69734ce2804e71528e5240d4eddc7bd43d1a9c1b03ad319303814e0d9a8334061f4aa02ceec5287e2a0de3155ef6fa2b2b769a5708abdcd520d89af75282c22125c48113d6bcef5ef13bea4c228f2b1231239fbd59bafebd3eab78c725221f2aa541a7e9b24ff3bf4ad2ca3ab2e106c899cb9cb6690363bd68cf61e58c05fc6a918bf034292668e2d6e34498ef576c2ede0b85603713daa998aa4851838238abd190ceba2d5042a2484bacc305941e0d5d1ae4178544ce437cc707a73d6b9689267c75c83d6adcba7b84debc13e9584e9c1bd4a8ca4b63d17c3ba85a2e990db17ff579524fd735d8b9508983dabc120d427b0dd0124066e474aeff00c3de2c678d2d2ef7bba9da24cf6cf15cf1c2aa7294e2f72fdab7a33ba07df15203c5564932a0835287cd5944c0f38a7eea881a7034c2c4a0d3c366a10d4e0d4c44d9a3351abd3b7d170b9e6bcf5a3773d702984e38a5cd2390783485b069bbb3c0a51cd3431f92718a50477a8f38e05389c0a603d9805ce718af3af156b8f7d73f668dbf7119edfc4deb5d8eb97bf63d266973f391b57ea6bcb1c333679fad6d4d752e2ba93585a9b998641c035d7dbda98a250471d6ab7866d555048e013ef5bb710e3bfbd7356abef58eea30d2e516891c60ad645fd8e3e645ade111c8a7fd93ccfc6b28cec6b3a77472290608047ccd5a561a633c859c61474add5d263122bb274ed56c5b6c5e1715b3afd8e6f60ee53b7b348caf038abaa8b9c11f4a5f29f3c0a9154ff10a8bb669ecf951cdeb9a780dbd796eb9aa5a4dd94b809213df69aeaae60f3a3391d4571f750bdbdd6f4254835bd395d72b39aa46c7ac787f51f32158e49599bb71d2ba20dc579df84af54aa42dfeb0721fdf35dfa312067afb566f7b0e2f42c23e38a9377bd40188a7e7340ee4c0d3b39a84353c1cd3024dd46ea68639a76e34584799dedc258dbbcf293b13d064d73ede31b65738b49f683d4915b7a948b2584caea0e50f5fa579dbc681b857dde868e648c94133b4b6f1569b3b05777849ff009e8b81f9d6dab8650c3041e98ef5e651c114d7291fcc0118c7bd7a0e9b6cb6761140afb95477a6add01c6c5eed475a50c0d18c37145ec2b5ce6bc62fff0012d894f5327f435c2804b0f5aedbc6283ec11b9ebe67f4ae294e5c66b58bbc4a8ab1d8e8fb52ce338c1ad2f3b31e3b562e972131221e40ad944dc3bd70d4dcf4296b1248d467a7e757638c123915047037d2afc31853d33585cdeda122c271cb66a616bbbde9ebbc803802a601c0c9345da26c5536eab935198cf3d3356dd5fb8a80b60735ac59338bb14dd36e7fa5723acafefdb3c735d8ca3bd71dab126f3d79aeba7ab386a868b7df67bb087233c6e15ec56c730c6739f945786ab624dcbc1ee6bd8f4191a5d16d5db24ec0326aeac7a995366b8eb9e2943546a7d69e31592351e0f38a70f7a8bad3ff001a0448a79f6a7e56a1a298b53c0ef35679a5647b82bcf403359d8592e17791b48c2b8e95544891a4994dec7a127a559d3e192e60b82b8223c3fccd8fcbd6938590e2588c8b3bcdc8a650b83c7635d6e99aa4778bfdd7c7dd35cb5fc090cb05bef2bb903b9c67e634db094d9ea116d62c18d0bdddc52573d0d18151eb5229f5aca4b9dab9fe75692e81ed54ed633473de369d3ecb0c40fcdbb7571487e702baff0014da3dd347246a481d702b93b68c9bb44ff680ad23f096b53b1d1a0c20df8add59a245e3071deb90bbbb78bf7711c71553fb4dd473293f4ae495373773aa35394f4259e3c0e45685bba96522bca86a171bb7079307bd6de95adc91b2ab4c4e7d7d294b0ce28b8e22ecf4a55493152108a0d6469f3bcf0336ecf1dab3f55bc9ed9321c8f6358462dbb1bca492b9becc809e738a825d857a826bcf24d6ef23973f68623d09abb06bd23fdf719c74cd74aa125a9cf2c42ec75932feefaf4ae3b564293b735a76badbb4656519e7bd54d71336de7afdd35b534e2f5396a4b98e791cb49d6bd9bc3bbd741b3ddd7cb15e2909ccaa073935ee1a5029a5db2952a5625183db8adeb7c28ca9ad4d1073f853c74a8475ce29e0fbd731b5c908cd1e9cd341e69dd69898f073da97f0a60fa52fe14893e6a8e15b81f3075fa55e85e28a2f2f681ce79a80cf11da155b09c0c521124926e486423e95179b65fbb626bc93cf5dd901d7a1269ba6abcd7cacef9fa76a1a2b9238b7381cf38a9b4c965b59084b5dc58e3ef015518ca4f525b47524045c6c2bec7b558421635cf19ce3d6b167d56f127789ac54b6ec7fad07f5a745ab5e632b619f712568e3232361190cca8fcc6eac326b8a8ad4c3aa2ee18c3f4ae806a570725f4d9491c82ae38aaf77fe93aa25c7d9da15619dafd738a1de28de86aecc59f4979c164e370ef51c7650c51794c801fef574b6e81a0076f3dc5486cd1d41283f1ae555b959d7ec6e615ac56d66accaa8eccbb70c322a935ac60874c0753c607e95d50d3947f00c5536d3e356624557b6bee2541a66be8accb6aac40cedaa5ab29b9bb7dfc22ae71eb5a561015b7054f38a57b359d8eefa6456307ef368dea53f74e5e38219a1685e25196ddbfbd39bc3b6d8f9189f97f2ae98e9491ff066a48ec557903f1ae8f6cfa1c6e8eb7b1cbda6973c48d0c9965fe16c54facdb08f4964393802ba7fb363902b3353b7f3e2646e3bd546a5d93ec9a399d1346692f6d598677302057ad469b1028ed581e1fb340c66dbf7170b5d029ad253e609454741f934f0714c0702957351a90c70381d7f3a706c9e6a3cd3b2314c9b9203cd3b351671cd1e6502b9e14582e32800a745326dce055e9ed54a7c921cfa114915820881fe94d59b336ec8c2696496e08663b41e957ece4b74b889a747788382e8bc165ee0549709691b1dee81ba71d6ab892dc11b65c7be2bab97426e48670672c83099caa9e702ad25e12a5936a85ebef50430237cca0b8f622a7d911cef85bf2a895c699a76ec65b777e9f28fd4d417b2729b972d9c669d6d78ab1bdb00bb18ab1cf6c53ee9a37b7fe1dc0f15c527252b335834a4997ec250635ddc56cc382b9eb5cd594fb481dab7adee06dce2b96a2d4f569c932d4e3087e958e5cbc8100ce4e2b5a594056cf71d2b949f537b3bd6dca4e1b3f853845bd8d26d23b6b5511db9c2f5e066a30c239486183546c3c4f08b7ddb540039cd3ad7517d42ef06d9d53b391c5546125ab413a916ac8dd8c6531d2830fcbc53d400339cf1485b8e3b54b7a8b62b37c839e2b3e5804f26ddd804f26af4ef9aa90ab4974881f193806b781cb51ea6ce9f6ff65b729eac4d5ccd31176205f414e15aa39a4eec775180297ebf9d3697f1e2a919b1dfa9a51f9d341c0a503d2801d9c75a370a439f6a4e7da9d89bb3ca9a2eb525c4323e9eeb10c49b7e5c7ad2e327dab4634c203ed5961e777764496879d4a922bb6e52a7a7271cd42c1d012324e6bb7d5aca2ba8b6ac6be7b9da86b10e8172ac329b8679c38af49548bdd91cc645b4b3433a98f24fa7ad682ea17c1126c232b305d98ed53dae9f7d692338b30ccd80327851deb423d2add2e3ce3090fc719e0544e5135a728f52bccdb242cdc62a25b9476daae19bae29fa840ec1d51d54364124678aaf6f632fda04a36884af6fe2e38af2e5093936cd138a34e207cb0c3b77ad6b5976267dab12093cb578dab66c4c72c593f769ca3dce984b4d095ee8c9c83c9ec69b269a97c06fc027bd53beb396470f6b398fea2960b5d533b7cf46a147aa66d0529ad4bf6fe17f21c3072eb9e9dab6c42f0c400eddab2adad75b1190b2aede9cb1a9cd8ea6832d346b9ef9269be67bb34f6096a6825e326016ab22e55d7fad73ed637c64577b8dc57b6de3157a0561192fc527146329ca24d2cbb98d1a5fef7524efb416aa724bb54fa1ad4f0fc19125c9fe2f957fad690472ca77373afa52e28ed4a455900700e28c51463be78a6896c338a703c51d7e9474fad02b8738e293e7a5c63da8ff008153b0ae8f3dfb0a860037156caed53f4a9157e6a1c714a34e31d8ceedee5311e64ce391d2a9c9670b236d4657fc6b44f0093daa06323636f1ef5680a36f0159c3798c40edb8d5b3de952170c0b3f2334f3034c855558fae29b1ad4ca37d66e7e5bc8c7b122812acae44724320ed8c527fc2150cb9c4f227b120ff004a9ed7c28961219567f376a9c02b8c1fad0d2ee53b185737a8f7d220006c001c77ab76576d1164ce14d736eef0eb1344fc1dc7bd694136d3cd2ab0b686d096876113aba718a5569637dc071df1599657048186e2ba8d3da195391f377ae292e53b694efa1412f6e55b87700f6ad0864b89304a13f5ad24b6843eec2fd48a96431c6b8e952a5d8d5b9756509a5511e1865ab3e6bada0aaf7a9aeee14b7a8ac5b9b95048072dd856b083670d5abd10b77a8456d1ef76e01e07735dde9e216b0b7920ff0056e8196bc7f59977cf0c271bba91f5af52f09399f4636c4e5e1f9947b77aed54bdcb9c8e5a9b03f0a502940c502b0d8d2e2609eb4ec0e31428cd2fe1cd3f3042118ce2947514b4a48fce9a2467b51b69783df14607f7e8d4470f0ed2776ee7eb560a3498d8a48f6ad48ad6d21c9d81bfdee6adc52c3b40c63f0e2b6e46ccaf639f5b1b86ff009647f1a9069374e7845ffbeab79f6306014e7b62a1864f2e5da723eb47b361cc67da687234c0dce020ec0f5ad1be8a38ad5638d5517b002acef619de300771546f2612be378c0e9ef5a46990e7a14225501b3c01dea48e2ca9e383516c52fd39ad0863cc79cf34d24e560e6763c8fc5fa79b4d656e506124383f5aa9090c8335dd78b34cfb6594a40cba7cc2b868138c1a75a1d4da84ef1b17ad6f1a1233d335d3e9baac6a465be5fad724a9db19a9151d31b588fa572ca9c67b9d0a728bd0f40fed756070e08ed514da9865c34aa76f615c42b4d8fbe4558852490e37b13f5aca3412ea5cabc9ab1ad75a879afb231cf7e6963836c65e4fff00553ec74c2103bf146a0fb57cb06b4ba5a239acdb397ba46b9d6a22bf78c8a3f0af53f0a4a6df528d3b15da4579de9f07fc4dd188ced05abbed1d4453c32f70d5db4b58985676923b6b9d3e40e5e31953d00ed54590a9f98107deba185f7460fb532589271f3a03584a97636bf53029ddaae4b618ff005672476355990a70ea4564e2d0ee3339ed47514bb6931ef485703d3069bb45291498a76173186919db8fd6a411e5707ad3c0e3a6714e5f5c57a76470df52b798c842b655877153abf98dc618d24d0f98a6ab149603b96a1c4b5266a33836edc7cc071584198c848eb5a31c8268c8ce09aa935bcb065d46e5ef446229bb99ba86a2d676ecea079adc2e6bcf2f357d5a4ba77fb7dc2f3c0590803f015e93169915e287b8f9a4fe15ed8aab7da25bf92f8b74071e94e11b31a9d88fc337c75ad01e3ba3beee03b5d8f565ec6b9bd43459ac754954c4de516c834db0be9b44d4bcd88f2a76b21e8cbe95e87632db6a76e97b6db595bef29e4a9f435728a9ae50527097323ce24d3e4077c6a48f6a8c432ee2361fa57a63e9714920688223771d8d39f449197296caff00ee106bceab19d376b5ceea3523515ee79f5bd8cb2edf908addb2d28230246456f2e97729d2ca51f48cd5b5d2eecc7f2dac809fef0dbfceb9a529bd91bf2c77316e4243161460561cf1efcb62bae97c3b752383713c3127a6edc7f2153c3a3e970025964b971d377cabf95553a351913ab4e3d4e274ab52d7b23edfba028aebed231c7b73d2a158926be67202216c05418c0ad1b68843e63c8d8445249cf402bd2a51e58d8f3ea4f9e57475b6326fb543ed52c93aa12adf29ed9ef5c258fc408fce584d81f2871bc3f3f9575cba8db5ec11ca84342e3f106aa54e5d51a46a2b1718831e54fe22991a4770a448b9f43deb36e19add4bc329c7f74f345add4c7e6c023d2a1d20554bb3698e3989b70f4aa0f1ed621860f7cd6b457ca786e0fbd4ce20b85f9941f7ae795235ba660639a5c55c9acda32593e65a8763ff0072a39193a18de5f714e0b83ed5222f382714a170db79af4ce122236f6a7988b0ed8a7ec1d29ea30083fcea2da9a2d8ca783ca90919c54ab315043f4e9cd59963c9c91c5577878c638a76255c6bdb44ec1e37db9ef4c962b8d8728245f6eb4ff2dd475e285778f071fa55225a390d5fc36d7b217851a27ac3d32fefbc37aa61c30ece99e1d6bd543ac87e7159baaf876d35584fca037623b1aad1ee3526b72de91a95aeab6c24b7917763e78d8fccb53dc42e99784124f50a6bcfa4d0753d1ee375b3b065fbac3835d0e93e2b95585aeb10b47213c4b8db9fad2700ba7b1bcb2df84fbb30fc7348cd7c724abedf735b16d3c7345d47d6abdd4aa7f7519c9ee7d2b99fc56b17caedb942dede599f7cbc01c633d6a5bddb15bb1565c81da9e63603863f8d52bf656531a10edd901eb5d118f4466f44538a7b1b48bcdb99d54839c77aad7f3dc6b90b4165982073f3b38f9985565f0ede493196e17e62d9c56f5a5af923604c7bfa56ca9c63a92e6f647303c33736aa1959641d78eb5d3e811bc76386e033671e95a315b9e37d5c8d628ff840a27534b0d41b77640c8597e6a58f0838a9a4208e071519ac7565fc3b09bf3907a1a58eea485b1f797d3d2a21f7cf7f7a4734f9513cf23661b84997ef0fa54bf27b5620765f990fcc297ed773eb59fb334f6a55dbdc0cd2f53e87bd393eed37f8daa9920578e5ba5481729902a36e8d53c7feaa975288c0dfd4d0225e8c3fc688ea46ff005d431222f293e61d47a534c1b9b695cd48bf79aa55ff005d4202ab5a956e318c52adbed208391daacbff004a44fb89542644d02c89b1d038acebad25248995904917604722b623eb48dfea5a84d99c8c5b1b5b8b247488bbc0832323253daa9cbacdca00b67a6cd296fe371815d1db7fc7bded63daff00a88eb584536ee37a2d0a021f11ea19134e96a9e91f515aba569096232ee6594f56357e3fbcf5247f7aa9e8b422edee498c8c8eb4bb0678f4a13a5397afe1591a21aabc8f5a5038cf7a55fbe281d28042ece31f9530a93ee2a6eeb4c5fbb409912af5148e3e6cd3d7ef1a6bd050c604631d0d26d34f6fba945320ffd9, 'image/jpeg', 'atifgriscube', 'test password', '1', 1, '250 cm3', 0);
INSERT INTO `adherent` (`IdAdherent`, `Nom`, `Prenom`, `DNaiss`, `Adresse1`, `Adresse2`, `CdPost`, `Ville`, `Email`, `Tel`, `DAdhesion`, `Organisateur`, `Avatar`, `Avatar_blob`, `Avatar_type`, `Login`, `Password`, `certificat`, `droit_image`, `cylindree`, `Admin`) VALUES
INSERT INTO `adherent` (`IdAdherent`, `Nom`, `Prenom`, `DNaiss`, `Adresse1`, `Adresse2`, `CdPost`, `Ville`, `Email`, `Tel`, `DAdhesion`, `Organisateur`, `Avatar`, `Avatar_blob`, `Avatar_type`, `Login`, `Password`, `certificat`, `droit_image`, `cylindree`, `Admin`) VALUES
(18, 'test nom', 'test prenom', '1980-01-22', 'test adresse', NULL, 'Test ', 'test ville', 'test@test.com', 'test tel', '0000-00-00', 0, '', '', '', 'test identifiant', 'test password', '1', 1, '', 0),
(24, 'test nom', 'test prenom', '1980-01-22', 'test adresse', NULL, 'Test ', 'test ville', 'test@test.com', 'test tel', '0000-00-00', 0, '', '', '', 'login1594042881', 'test password', '1', 1, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `IdInscription` int(11) NOT NULL,
  `DInscription` date DEFAULT NULL,
  `NbInvités` int(11) DEFAULT NULL,
  `IdAdherent` int(11) NOT NULL,
  `IdActivite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `nouvelle`
--

CREATE TABLE `nouvelle` (
  `IdNouvelle` int(11) NOT NULL,
  `Titre` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Introduction` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `Texte` text CHARACTER SET utf8mb4,
  `DPubli` date NOT NULL,
  `Diffusion_level` tinyint(1) DEFAULT '0',
  `Image` varchar(250) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `nouvelle`
--

INSERT INTO `nouvelle` (`IdNouvelle`, `Titre`, `Introduction`, `Texte`, `DPubli`, `Diffusion_level`, `Image`) VALUES
(1, 't1', '', '<p>Ajouter informations...test desciption</p>', '0000-00-00', 0, NULL),
(2, 't2', 'Mon troduction', '<p>Ajouter informations...test desciption 2</p>', '0000-00-00', 0, NULL),
(3, 't3', '', '<p>Ajouter informations...test</p>', '0000-00-00', 0, '1598514669.jpg'),
(4, '', '', 'test', '0000-00-00', 0, NULL),
(5, '', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(6, '', '', '<p>test news</p>', '0000-00-00', 0, NULL),
(7, '', '', '<p>Les gorges du tarn c\'est génial&nbsp;</p>', '0000-00-00', 0, NULL),
(8, '', '', '<p>Les gorges du tarn c\'est génial vraiment !</p>', '0000-00-00', 0, NULL),
(9, 'titre news', '', '<p>test Ajouter informations...</p>', '0000-00-00', 0, NULL),
(10, 'titre 22', '', '<p>dfdfdfdf f df&nbsp; fAjouter informations...</p>', '0000-00-00', 0, NULL),
(11, 'titre 23', '', '<p>Ajouter informations...test 23</p>', '0000-00-00', 0, NULL),
(12, 'titre 23', '', '<p>Ajouter informations...test 23</p>', '0000-00-00', 0, NULL),
(13, 'test 24', '', '<p>Ajouter informations...test 25</p>', '0000-00-00', 0, NULL),
(14, 'testtest 25', '', '<p>Ajouter informations...test25</p>', '0000-00-00', 0, NULL),
(15, 'hahaha je vais t\'avoir', '', 'ANonymous est dans la place', '0000-00-00', 0, NULL),
(16, 'test26', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(17, 'test27', '', '<p>Ajouter informations...27</p>', '0000-00-00', 0, NULL),
(18, 'test28', '', '<p>Ajouter informations...test28</p>', '0000-00-00', 0, NULL),
(19, 'test29', '', '<p>Ajouter informations...test28</p>', '0000-00-00', 0, NULL),
(20, 'sddsds', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(21, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(22, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(23, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(24, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(25, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(26, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(27, 'sddsdstest30', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(28, 'test31', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(29, 'test31', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(30, 'test32', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(31, 'test33', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(32, 'test33', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(33, 'test34', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(34, 'test35', '', '<p>Ajouter informations...test35</p>', '0000-00-00', 0, '1598345436.png'),
(35, 'test36', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(36, 'test36', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(37, 'test38', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, NULL),
(38, 'test39', '', '<p>Ajouter informations...</p>', '0000-00-00', 0, '1598426350.jpg'),
(39, 'test 40', '', '<p>Ajouter informations...40</p>', '0000-00-00', 0, NULL),
(40, 'test 41', '', '<p>Ajouter informations...41</p>', '0000-00-00', 0, NULL),
(41, 'test 42', '', '<p>Ajouter informations...41</p>', '0000-00-00', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id_page` smallint(4) NOT NULL COMMENT 'ID de page',
  `key_file` varchar(30) NOT NULL,
  `metatitle` varchar(100) NOT NULL,
  `metadescription` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `h1` varchar(250) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `page_level` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id_page`, `key_file`, `metatitle`, `metadescription`, `keywords`, `h1`, `menu`, `page_level`) VALUES
(1, 'accueil', 'Moto Club Millau Passion | Accueil', 'Moto Club Millau Passion | Association de loisir autour de la moto !', 'Moto, Plaisir, Club, Millau, Passion, Accueil', 'Accueil', 'Accueil', 0),
(2, 'activites', 'Moto Club Millau Passion | Nos activités', 'Les activités de l\'association Moto Club Millau Passion', 'Activtés, Tarn, Deux roues, Millau, Passion, Accueil', 'Activités', 'Activités', 0),
(3, 'contact', 'Moto Club Millau Passion | Nous contacter', 'Les activités de l\'association Moto Club Millau Passion', '', 'Contact', 'Contact', 0),
(4, 'galerie', 'Moto Club Millau Passion | Notre Galerie Photo', 'Les activités de l\'association Moto Club Millau Passion', '', 'Galerie', 'Galerie Photo', 0),
(5, 'informations', 'Moto Club Millau Passion | Les informations de l\'association', '', '', 'Informations', 'Informations', 0),
(6, 'presentation', 'Moto Club Millau Passion | Présentation et histoire de l\'association', '', '', 'Présentation', 'Présentation', 0),
(7, 'inscription', 'Moto Club Millau Passion | Inscription', 'description de la page', '', 'Inscription', 'Inscription', 0),
(8, 'membres', 'Page des membres', '', '', 'Liste des membres', '', 1),
(9, 'profil', '', '', '', '', '', 1),
(10, 'connexion', 'Page de connexion', 'Page de connexion', '', 'Page de connexion', 'Connexion', 0),
(11, 'information', 'a générer dynamiquement', 'a générer dynamiquement', 'a générer dynamiquement', 'a générer dynamiquement', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `IdPhoto` int(11) NOT NULL,
  `Titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `DPhoto` date DEFAULT NULL,
  `Fichier` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `IdAdherent` int(11) NOT NULL,
  `IdActivite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_activite`
--

CREATE TABLE `type_activite` (
  `IdType` int(11) NOT NULL,
  `IntituleType` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`IdActivite`),
  ADD KEY `IdAdherent` (`IdAdherent`),
  ADD KEY `IdType` (`IdType`);

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`IdAdherent`),
  ADD UNIQUE KEY `Login` (`Login`),
  ADD KEY `Login_2` (`Login`,`Password`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`IdInscription`),
  ADD KEY `IdAdherent` (`IdAdherent`),
  ADD KEY `IdActivite` (`IdActivite`);

--
-- Index pour la table `nouvelle`
--
ALTER TABLE `nouvelle`
  ADD PRIMARY KEY (`IdNouvelle`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`IdPhoto`),
  ADD KEY `IdAdherent` (`IdAdherent`),
  ADD KEY `IdActivite` (`IdActivite`);

--
-- Index pour la table `type_activite`
--
ALTER TABLE `type_activite`
  ADD PRIMARY KEY (`IdType`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `IdAdherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `nouvelle`
--
ALTER TABLE `nouvelle`
  MODIFY `IdNouvelle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'ID de page', AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`IdAdherent`) REFERENCES `adherent` (`IdAdherent`),
  ADD CONSTRAINT `activite_ibfk_2` FOREIGN KEY (`IdType`) REFERENCES `type_activite` (`IdType`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`IdAdherent`) REFERENCES `adherent` (`IdAdherent`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`IdActivite`) REFERENCES `activite` (`IdActivite`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`IdAdherent`) REFERENCES `adherent` (`IdAdherent`),
  ADD CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`IdActivite`) REFERENCES `activite` (`IdActivite`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;