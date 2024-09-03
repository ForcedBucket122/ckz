import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        System.out.print("Podaj liczbę 1: ");
        int a = scan.nextInt();
        System.out.print("Podaj liczbę 2: ");
        int b = scan.nextInt();

        if (a==b){
            System.out.println("Liczby są sobie równe");
        } else if (a>b) {
            System.out.println(a);
        } else {
            System.out.println(b);
        }
    }
}