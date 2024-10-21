package zaliczenie.do_zaliczenia.zad2;

public class Pracownicy {
    int identyfikator=1;
    String imie;
    String nazwisko;
    int wiek;
    String doswiadczenieZawodowe;
    public Pracownicy(String imie, String nazwisko, int wiek, String doswiadczenieZawodowe){
        identyfikator++;
        this.imie=imie;
        this.nazwisko=nazwisko;
        this.wiek=wiek;
        this.doswiadczenieZawodowe=doswiadczenieZawodowe;
    }
}
