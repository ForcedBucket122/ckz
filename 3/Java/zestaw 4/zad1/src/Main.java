public class Main {
    public static void main(String[] args) throws Throwable {
        System.out.println(Car.counter);
        Car bmw = new Car("Fiat", "PO12345", Color.Red );
        System.out.println(bmw.info());
        System.out.println(Car.counter);

        Car volvo = new Car("Volvo", "PO12345");
        System.out.println(volvo.info());
        System.out.println(Car.counter);

        bmw.finalize();
        System.out.println(Car.counter);
        volvo.finalize();
        System.out.println(Car.counter);
    }
}