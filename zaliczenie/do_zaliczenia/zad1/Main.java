public class Main {
    public static void main(String[] args) {
        Auto mojeAuto = new Auto();
        Taxi mojeTaxi = new Taxi();
        
        System.out.println("Sredni przebieg: "+mojeAuto.srPrzebieg());
        System.out.println("Srednie zarobki: "+mojeTaxi.srZarobki());
    }
}