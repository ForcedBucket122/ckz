class RectangularPrism extends shape {
    private double length;
    private double width;
    private double height;
    public RectangularPrism(double length, double width, double height) {
        this.length = length;
        this.width = width;
        this.height = height;
    }
    @Override
    double calculateVolume() {
        return length * width * height;
    } @Override double calculateSurfaceArea() {
        return 2 * (length * width + width * height + height * length);
    } @Override double calculateEdgeLength() {
        return 4 * (length + width + height);
    } }