namespace zad2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Podaj liczbe a: ");
            int a = int.Parse(Console.ReadLine());

            Console.Write("Podaj liczbe b: ");
            int b = int.Parse(Console.ReadLine());

            int suma = a + b;
            int roznica = a - b;
            float iloraz = (float)a/b;
            int iloczyn = a*b;
            float pierwiastek = (float)Math.Sqrt(suma);
            Console.WriteLine("suma = " + suma);
            Console.WriteLine("roznica = " + roznica);
            Console.WriteLine("iloraz = " + iloraz);
            Console.WriteLine("iloczyn = " + iloczyn);
            Console.WriteLine("pierwiastek z sumy = " + pierwiastek);
        }
    }
}
