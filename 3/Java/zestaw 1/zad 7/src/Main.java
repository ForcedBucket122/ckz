import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        //liczby dziesietne na binarne
        Scanner scan = new Scanner(System.in);
        System.out.print("Podaj liczbe dziesietna: ");
        int l = scan.nextInt();
        String bin="";
//        int p=l;
        while(l!=0){
            bin=l%2 + bin;
            l /= 2;
        }
        System.out.print("Liczba binarna to: " + bin);
    }
}