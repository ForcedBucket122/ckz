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

namespace kalkulator
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
        public void click(object sender, RoutedEventArgs e)
        {
            try
            {
                int x = Convert.ToInt32(a.Text);
                int y = Convert.ToInt32(b.Text);
                int wynik;
                if (plus.IsChecked == true)
                {
                    wynik = x + y;
                    output.Text = wynik.ToString();
                }
                else if (minus.IsChecked == true)
                {
                    wynik = x - y;
                    output.Text = wynik.ToString();
                }
                else if (razy.IsChecked == true)
                {
                    wynik = x * y;
                    output.Text = wynik.ToString();
                }
                else if (dziel.IsChecked == true)
                {
                    wynik = x / y;
                    output.Text = wynik.ToString();
                }
            }
            catch (Exception ex) 
            { 
                output.Text = ex.Message;
            }
            
        }
        public void koniec(object sender, RoutedEventArgs e) 
        {
            try
            {
                Close();
            }catch(Exception ex) {  output.Text = ex.Message; }
        }
    }
}