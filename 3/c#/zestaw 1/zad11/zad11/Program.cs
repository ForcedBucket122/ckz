namespace zad11
{
    internal class Program
    {
        static void Main(string[] args)
        {
            for (int i = 1; i <= 10; i++)
            {
                //Console.WriteLine(i*i);
                for(int j = 1; j <= 10; j++)
                {
                    Console.Write(i*j+" ");
                }
                Console.WriteLine();
            }
        }
    }
}
