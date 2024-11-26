import java.util.Scanner;

public class Samochod {
    String marka;
    String model;
    double przebieg;
    int rocznik;

    public Samochod(){
        Scanner scanner = new Scanner(System.in);
        System.out.print("Podaj marke: ");
        this.marka=scanner.next();
        System.out.print("Podaj model: ");
        this.model=scanner.next();
        System.out.print("Podaj przebieg: ");
        this.przebieg=scanner.nextDouble();
        System.out.print("Podaj rocznik: ");
        this.rocznik=scanner.nextInt();
    }
    public void pokarz(){
        System.out.println("Podane dane:\nmarka: "+marka+"\nmodel: "+model+"\nprzebieg: "+przebieg+"\nrocznik: "+rocznik);
    }
}
