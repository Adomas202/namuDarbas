# namuDarbas
Namu darbai PHP

Klausimų atsakymai:

1)  Kviečiant funkciją Nfq\Akademija\Soft\calculateHomeWorkSum argumentų tipas yra nurodytas int. Kadangi šita funckija nėra deklaruota strict režime, tai PHP automatiškai konvertuoja realų skaičių ir tekstą į int tipo skaičius.
2)  Funkcija Nfq\Akademija\Strict\calculateHomeWorkSum grąžiną skaičių 6. Strict typing galioja tiktais funkcijų iškvietimams tame faile, kur buvo strict types deklaracija. O kadangi strict types deklaracija yra functions_strict.php faile (jame nėra funkcijų kvietimo), todėl negalioja strict types jam.