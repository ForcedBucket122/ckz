public class Main {
    public static void main(String[] args) {
        //losowanie 50 razy orzel czy reszka
        // define the range
        int max = 2;
        int min = 1;
        int range = max - min + min;
        int orzel=0;
        int reszka=0;

        // generate random numbers within 1 to 10
        for (int i = 0; i < 50; i++) {
            int rand = (int)(Math.random() * range) + min;
            if(rand==1){
                orzel++;
            }else if (rand==2){
                reszka++;
            }
            // Output is different everytime this code is executed

        }
        System.out.println(orzel+" "+reszka);
    }
}