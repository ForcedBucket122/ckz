import java.util.ArrayList;
import java.util.List;

public class Main {
    public static List<Integer>sprawdzDzielniki(int k){
        List<Integer>dzielniki=new ArrayList<>();
        for (int i = 1; i <= k; i++) {
            if (k%i==0){
                dzielniki.add(i);
            }
        }
        return dzielniki;
    }
    public static void main(String[] args) {
        int k = 40;
        List<Integer> lista = sprawdzDzielniki(k);
        System.out.println(lista);
    }
}