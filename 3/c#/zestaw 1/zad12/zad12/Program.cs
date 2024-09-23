namespace zad12
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //szkola w petli w kolejnych wierszach
            char[] szkola = "szkola".ToCharArray();
            for (int i = 0; i < szkola.Length; i++) {
                Console.WriteLine(szkola[i]);
            }
        }
    }
}
