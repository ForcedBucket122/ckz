public class Car {
    public String make;
    public String plate;
    public Color color;
    public static int counter=0;

    public Car(String make, String plate, Color color){
        this.make=make;
        this.plate=plate;
        this.color=color;
        counter++;
    }
    public Car (String make, String plate){
        this.make=make;
        this.plate=plate;
        this.color=Color.Unknown;
        counter ++;
    }
    public String info(){
        return "Make: "+make+", Plate: "+plate+", Color: "+color;
    }

    public String getMake() {
        return make;
    }

/*
    public void setMake(String make) {
        this.make = make;
    }
*/

    public String getPlate() {
        return plate;
    }

    public void setPlate(String plate) {
        this.plate = plate;
    }
    public Color getColor() {
        return color;
    }

    public void setColor(Color color) {
        this.color = color;
    }

    public static int getCounter() {
        return counter;
    }

    @Override
    protected void finalize() throws Throwable {
        try{

            System.out.println("Zwalnianie zasobów dla samochodu: " + make);
        }finally {
            super.finalize();
            counter--;
        }

    }
}
