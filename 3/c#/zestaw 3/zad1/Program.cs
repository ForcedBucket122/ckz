namespace zestaw_3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a = 10;
            int b = 5;
            for (int i = 1; i <= b; i++)
            {
                for(int j = 1;  j <= a; j++)
                {
                    
                    if (i == 1)
                    {
                        Console.Write("*");
                    }
                    else if(i == b)
                    {
                        Console.Write("*");
                    }
                    else
                    {
                        if(j==1)
                        {
                            Console.Write("*");
                        }
                        else if(j == a)
                        {
                            Console.Write("*");
                        }
                        else
                        {
                            Console.Write(" ");
                        }

                    }
                    if (j == 10 && i == 5)
                    {
                        Console.WriteLine("\n    a");
                    }
                    if (i == 3 && j == 10)
                    {
                        Console.Write(" b");
                    }
                }
                Console.WriteLine();
            }
        }
    }
}
