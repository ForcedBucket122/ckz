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

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            string input = imie.Text;
            if(input.Length > 2)
            {
                this.ReturnValue = input;
                this.Closing -= Dialog_Closing;
                Close();
                //MessageBox.Show(input);
            }
            else
            {
                MessageBox.Show("Podaj imie!");
            }
        }
    }
}
