public class Main {
    public static void main(String[] args) {
        Lista l = new Lista(5);
        l.dodajElement();
        l.dodajElement();
        l.dodajElement();
        l.dodajElement();

        int x=l.znajdz(2);
        System.out.println(x);

        l.pisz();

        l.usunPierwszy(2);
        l.pisz();
        l.zapiszDoPliku();
    }
}