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
using System.Windows.Shapes;
using Microsoft.Win32;

namespace zad1
{
    /// <summary>
    /// Logika interakcji dla klasy ankieta.xaml
    /// </summary>
    public partial class ankieta : Window
    {
        public ankieta()
        {
            InitializeComponent();
        }
        public String Odczytaj()
        {
            String wynik="";
            wynik +="imie: "+ imie.Text.ToString();
            wynik +="\nNazwisko"+ nazwisko.Text.ToString();

            if (kobieta.IsChecked == true)
            {
                wynik += "\nplec: Kobieta";
            }else if(mezczyzna.IsChecked == true)
            {
                wynik += "\nplec: Mezczyzna";
            }

            wynik += "\nZainteresowania: ";
            if(programowanie.IsChecked == true)
            {
                wynik += "Programowanie, ";
            }if(Muzyka.IsChecked == true)
            {
                wynik += "Muzyka, ";
            }if(Film.IsChecked == true)
            {
                wynik += "Film, ";
            }

            wynik += "\nSzkola: "+ szkola.SelectedItem;

            wynik += "\nO sobie: "+osobie.Text.ToString();

                return wynik;
        }
        public void ZapiszWNowym(object sender, RoutedEventArgs e)
        {
            SaveFileDialog saveFileDialog = new SaveFileDialog()
            {
                Filter = "Pliki tekstowe (*.txt)|*.txt",
                FileName = "ankieta"
            };
            if(saveFileDialog.ShowDialog() == true )
            {
                String wynik = Odczytaj();
                saveFileDialog.InitialDirectory = wynik;
            }
        }
    }
}
