using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace zad3
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }
        public void zaloguj (object sender, RoutedEventArgs e)
        {
            String log = login.Text.ToString();
            String pass = password.Text.ToString();
            bool poprawne1 = false;
            bool poprawne2 = false;
            bool poprawne3 = false;

            char[] chars = log.ToCharArray();
            foreach (char c in chars)
            {
                if (int.TryParse(c.ToString(), out int result)) {
                    MessageBox.Show("pole Login i Password muszą zostac wypelnione tylko literami", "błąd");
                }
                else
                {
                    poprawne1 = true;
                }
            }
            char[] chars2 = pass.ToCharArray();
            foreach (char c in chars2)
            {
                if (int.TryParse(c.ToString(), out int result)) {
                    MessageBox.Show("pole Login i Password muszą zostac wypelnione tylko literami", "błąd");
                }
                else
                {
                    poprawne2 = true;
                }
            }
            if(log.Length == 0||pass.Length==0)
            {
                MessageBox.Show("pole Login i Password muszą zostac wypelnione", "błąd");
            }
            else
            {
                poprawne3=true;
            }
            if (poprawne1 && poprawne2 && poprawne3)
            {
                MessageBox.Show("Zalogowany");
            }
        }
    }
}