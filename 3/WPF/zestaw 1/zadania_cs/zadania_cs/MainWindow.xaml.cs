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

namespace zadania_cs
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
        private void buttonClick(object sender, RoutedEventArgs e)
        {
            int bak = Convert.ToInt32(pojemnosc.Text);
            int km = Convert.ToInt32(do_przebycia.Text);
            int kmNaL = km / bak;
            output.Text = kmNaL.ToString();
        }
    }
}