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
        public void Red(object sender , RoutedEventArgs e)
        {
            okno.Background = new SolidColorBrush(Colors.Red);
        }
        public void Yellow(object sender, RoutedEventArgs e)
        {
            okno.Background = new SolidColorBrush(Colors.Yellow);
        }
        public void Blue(object sender, RoutedEventArgs e)
        {
            okno.Background = new SolidColorBrush(Colors.Blue);
        }
        public void Green(object sender, RoutedEventArgs e)
        {
            okno.Background = new SolidColorBrush(Colors.Green);
        }
    }
}