import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        int p=0;
        Scanner scan = new Scanner(System.in);
        for(int i=1; i<=3; i++){
            System.out.println("podaj liczbę " + i);
            int l = scan.nextInt();
            p+=l;
        }
        System.out.println("Suma trzech liczb wynosi: "+p);
    }
}