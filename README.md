# namuDarbas
Namu darbai PHP

Klausimų atsakymai:

1)  Kviečiant funkciją Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) visi parametrai pries pradedant vykdyti funkciją yra paverčiami į int tipo kintamuosius. Taip mes gauname, kad parametrai yra (3, 2, 1). Su šiais parametrais atliekama sudėtis ir yra gaunamas int skaičius, todėl rezultatas ir yra išspausdinamas 6.
2)  Jeigu funkcija Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1') yra kviečiama kitame faile, negu tame, kur yra aprašoma ji ir yra 'declare(strict_types)=1' deklaracija, tada funkcija išspausdins atsakymą:6;

    Tačiau jeigu funkcija Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1') yra kviečiama tame pačiame faile, kur yra funkcijos realizacija ir yra įdėta declare(strict_types)=1;, tuomet rezultatas bus Fatal error: Uncaught TypeError. Taip yra todėl, nes declare(strict_types) sako, kad negali skirtis kintamojo tipas parametrų varduose ir grąžinamojoje reikšmėje, nuo to, koks nurodytas funkcijoj.