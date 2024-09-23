

using System;

public class HelloWorld
{
    public static void Main(string[] args)
    {
        //km/h na wezly
        float km = 0;
        int z = 0;
        float w = 0;
        for (int i = 0; i < 3; i++)
        {
            Console.Write("Podaj predkosc: ");
            km = float.Parse(Console.ReadLine());
            w = (float)(km * 1.852);
            Console.WriteLine(w);
            Console.WriteLine("Aby zakonczyc wcisnij 1: ");
            z = int.Parse(Console.ReadLine());
            if (z == 1)
            {
                break;
            }

        }
    }
}