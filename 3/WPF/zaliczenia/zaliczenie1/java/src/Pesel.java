import java.util.Scanner;

public class Pesel {
    int[] pesel = new int[11];

    public void setPesel() {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Podaj pesel (11 cyfr!): ");
        for (int i=0; i< pesel.length;i++){
            pesel[i]=scanner.nextInt();
        }
    }

    public int getPlec(){
        if(pesel[9]%2==0){
            return 1;
        }else {
            return 2;
        }
    }
}
