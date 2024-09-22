import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        //podaj 5 liczb i wyswietl w odwrotnej kolejnosci
        Scanner scan = new Scanner(System.in);
        int[] tab=new int[5];
        for (int i = 0; i<5 ;i++){
            System.out.print("Podaj liczbe: ");
            int l = scan.nextInt();
            tab[i]=l;
        }
        for (int i=tab.length-1; i>=0; i--){
            System.out.print(tab[i]+" ");
        }
    }
}