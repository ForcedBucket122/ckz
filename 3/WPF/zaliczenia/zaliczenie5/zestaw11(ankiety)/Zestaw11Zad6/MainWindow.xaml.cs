using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using static System.Net.Mime.MediaTypeNames;

namespace Zestaw11Zad6
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
        int index = 1;
        string[] zdjecia = {"/john1.jpg","/john2.jpg","/john3.jpg" };

        private void Prev(object sender, RoutedEventArgs e)
        {
            index -= 1;
            if (index < 1)
            {
                index = 3;
            }

            BitmapImage bitmap = new BitmapImage();
            bitmap.BeginInit();
            bitmap.UriSource = new Uri(zdjecia[index - 1], UriKind.RelativeOrAbsolute);
            bitmap.EndInit();
            zdjecie.Source = bitmap;

        }

        private void Next(object sender, RoutedEventArgs e)
        {
            index += 1;
            if (index > 3)
            {
                index = 1;
            }

            BitmapImage bitmap = new BitmapImage();
            bitmap.BeginInit();
            bitmap.UriSource = new Uri(zdjecia[index - 1], UriKind.RelativeOrAbsolute);
            bitmap.EndInit();
            zdjecie.Source = bitmap;

        }

        private void ZmienTlo(object sender, RoutedEventArgs e)
        {
            if (radio.IsChecked == true)
            {
                window.Background = Brushes.DarkGreen;
            }
            else
            {
                window.Background = Brushes.Purple;
            }
        }

        private void ZmienZdjecie(object sender, TextChangedEventArgs e)
        {
            int numer;
            if(Int32.TryParse(NumerZdjecia.Text, out numer) && numer > 0 && numer <4)
            {

                BitmapImage bitmap = new BitmapImage();
                bitmap.BeginInit();
                bitmap.UriSource = new Uri(zdjecia[numer - 1], UriKind.RelativeOrAbsolute);
                bitmap.EndInit();
                zdjecie.Source = bitmap;
            }

        }
    }
}
