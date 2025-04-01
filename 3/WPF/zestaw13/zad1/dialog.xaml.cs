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

namespace zad1
{
    /// <summary>
    /// Logika interakcji dla klasy dialog.xaml
    /// </summary>
    public partial class dialog : Window
    {
        public string ReturnValue { get; set; }
        public dialog()
        {
            InitializeComponent();
            this.Closing += Dialog_Closing;
        }

        private void Dialog_Closing(object? sender, System.ComponentModel.CancelEventArgs e)
        {
            e.Cancel = true;
            MessageBox.Show("Podaj imie!");
        }

        public void gotowe(object sender, RoutedEventArgs e) 
        {
            String imie = imieIn.Text;
            if(imie.Length>2)
            {
                ReturnValue = imie;
                this.Closing -= Dialog_Closing;
            }
            else
            {
                MessageBox.Show("Imie musi mieć conajmniej 3 litery!");
            }
        }
    }
}
