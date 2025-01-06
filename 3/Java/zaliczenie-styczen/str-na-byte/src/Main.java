public class Main {
    public static void main(String[] args) {
        String napis = "kodowanie";
        System.out.println("Tekst: "+ napis);
        System.out.print("Ciąg bajtów:");

        byte[] kod = napis.getBytes();
        for(byte n: kod){
            System.out.print(" "+n+" ");
            System.out.print("\b,");

        }
        System.out.println(new String(kod));
    }
}