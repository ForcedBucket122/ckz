public class Prostokat {
    private double dlugosc;
    private double szerokosc;

    public Prostokat(double dlugosc, double szerokosc){
        this.dlugosc=dlugosc;
        this.szerokosc=szerokosc;
    }
    private double powierzchnia(){
        return dlugosc*szerokosc;
    }
    private double obwod(){
        return 2*dlugosc+2*szerokosc;
    }
    public void Prezentuj(){
        System.out.println("Powierzchnia: "+powierzchnia()+"\nObwód: "+obwod());
    }
}
