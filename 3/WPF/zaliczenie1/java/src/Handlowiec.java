public class Handlowiec {
    int id=1;
    String imie;
    String nazwisko;
    int wiek;
    String doswiadczenie;
    String skutecznosc;
    String prowizja;
    public Handlowiec( String imie, String nazwisko, int wiek, String doswiadczenie, String skutecznosc, String prowizja){
        id++;
        this.imie=imie;
        this.nazwisko=nazwisko;
        this.wiek=wiek;
        this.doswiadczenie=doswiadczenie;
        this.skutecznosc=skutecznosc;
        this.prowizja=prowizja;

    }

    public int getId() {
        return id;
    }
}
