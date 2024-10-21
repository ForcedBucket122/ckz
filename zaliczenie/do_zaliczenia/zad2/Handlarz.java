package zaliczenie.do_zaliczenia.zad2;

public class Handlarz extends Pracownicy {
    String skutecznosc;
    float wysokoscProwizji;
    public Handlarz(String imie, String nazwisko, int wiek, String doswiadczenieZawodowe, String skutecznosc, float wysokoscProwizji) {
        super(imie, nazwisko, wiek, doswiadczenieZawodowe);
        //TODO Auto-generated constructor stub
        this.skutecznosc=skutecznosc;
        this.wysokoscProwizji=wysokoscProwizji;
    }
    
}
