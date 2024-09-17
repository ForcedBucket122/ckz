namespace zad6
{
    internal class Program
    {
        static void Main(string[] args)
        {
            float i = 0;
            while (i<1)
            {
                Console.WriteLine("Podaj liczbe dodatnia");
                i=float.Parse(Console.ReadLine());
            }
        }
    }
}
