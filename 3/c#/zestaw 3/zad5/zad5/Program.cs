namespace zad5
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Podaj liczbe a: ");
            float a = float.Parse(Console.ReadLine());
            Console.Write("Podaj liczbe b: ");
            float b = float.Parse(Console.ReadLine());
            Console.Write("Podaj liczbe c: ");
            float c = float.Parse(Console.ReadLine());

            if(a < b) 
            {
                if(a < c) {
                    Console.WriteLine(a);
                }
                else 
                {
                    Console.WriteLine(c);
                }
            }
            else 
            {
                Console.WriteLine(b);
            }
        }
    }
}
