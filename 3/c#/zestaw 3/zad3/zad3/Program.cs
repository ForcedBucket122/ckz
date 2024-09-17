namespace zad3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Podaj bok a: ");
            float a = float.Parse(Console.ReadLine());
            Console.Write("Podaj bok b: ");
            float b = float.Parse(Console.ReadLine());
            Console.Write("Podaj bok c: ");
            float c = float.Parse(Console.ReadLine());

            float x = (float)(a+b+c)/2;

            float pole = (float)Math.Sqrt(x*(x-a)*(x-b)*(x-c));
            Console.WriteLine("Pole wynosi: " + pole);
        }
    }
}
