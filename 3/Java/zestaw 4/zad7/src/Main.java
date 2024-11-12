import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Podaj długość: ");
        double length = scanner.nextDouble();
        System.out.print("Podaj szerokość: ");
        double width = scanner.nextDouble();
        System.out.print("Podaj wysokość: ");
        double height = scanner.nextDouble();
        RectangularPrism prism = new RectangularPrism(length, width, height);
        System.out.println("Objętość: " + prism.calculateVolume());
        System.out.println("Pole powierzchni: " + prism.calculateSurfaceArea());
        System.out.println("Długość krawędzi: " + prism.calculateEdgeLength());
    }
}