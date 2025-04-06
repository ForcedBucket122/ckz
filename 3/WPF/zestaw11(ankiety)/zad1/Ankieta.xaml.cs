using System;
using System.Collections.Generic;
using System.IO;
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
    /// Logika interakcji dla klasy Ankieta.xaml
    /// </summary>
    public partial class Ankieta : Window
    {
        public Ankieta()
        {
            InitializeComponent();
        }
        public String Zbierz()
        {
            StringBuilder stringBuilder = new StringBuilder();
            stringBuilder.Append("Twoje dane: ");
            stringBuilder.Append($"\nimie: {Imie.Text}");
            stringBuilder.Append($"\nnazwisko: {Nazwikso.Text}");
            if (Kobieta.IsChecked==true)
            {
                stringBuilder.Append($"\npłeć: {Kobieta.Name}\n");
            }else if (Mezczyzna.IsChecked==true)
            {
                stringBuilder.Append($"\npłeć: {Mezczyzna.Name}\n");
            }
            stringBuilder.Append("Zainteresowania: ");
            var zaznaczone = Zainteresowania.Children.OfType<CheckBox>().Where(x => (bool)x.IsChecked).ToList();
            foreach (CheckBox x in zaznaczone)
            {
                stringBuilder.Append(x.Name+", ");
            }
            stringBuilder.Append($"\nSzkoła: {Wyksztalcenie.Text}");
            stringBuilder.Append($"\no sobie: {OSobie.Text}\n\n");


            //test.Text = stringBuilder.ToString();
            return stringBuilder.ToString();
        }
        public void Zapisz(object sender, RoutedEventArgs e)
        {
            var dlg = new Microsoft.Win32.SaveFileDialog
            {
                Filter = "Pliki tekstowe (*.txt)|*.txt",
                FileName = "ankieta"
            };

            if (dlg.ShowDialog() == true)
            {
                File.WriteAllText(dlg.FileName, Zbierz());
                Close();
            }
        }
        public void Dopisz(object sender, RoutedEventArgs e)
        {
            var dlg = new Microsoft.Win32.OpenFileDialog
            {
                Filter = "Pliki tekstowe (*.txt)|*.txt",
                Title = "Wybierz plik do dopisania"
            };
            if(dlg.ShowDialog() == true)
            {
                using (StreamWriter streamWriter = new StreamWriter(dlg.FileName, append: true))
                {
                    streamWriter.WriteLine(Zbierz());
                }
                Close();

            }
        }
    }
}
