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

namespace zad2
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
        public void funkcja(object sender, RoutedEventArgs e)
        {
            String sciezka= "";
            String cena = "";
            if (Pocztowka.IsChecked == true)
            {
                sciezka = "pocztowka.png";
                cena = "3 zł";
            }
            else if (List.IsChecked == true)
            {
                sciezka = "list.png";
                cena = "2,5 zł";
            }else if (Paczka.IsChecked == true)
            {
                sciezka = "paczka.png";
                cena = "15 zł";
            }

            BitmapImage bitmapImage = new BitmapImage();
            bitmapImage.BeginInit();
            bitmapImage.UriSource = new Uri(sciezka, UriKind.Relative);
            bitmapImage.EndInit();

            Photo.Source = bitmapImage;
            Wynik.Text = cena;
        }
    }
}