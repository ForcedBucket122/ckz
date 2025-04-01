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

namespace zad4
{
    /// <summary>
    /// Logika interakcji dla klasy okno2.xaml
    /// </summary>
    public partial class okno2 : Window
    {
        public okno2()
        {
            InitializeComponent();
        }
        public void NumberValidation(object sender, System.Windows.Input.TextCompositionEventArgs e)
        {
            e.Handled=!IsTextAllowed(e.Text);
        }
        private static bool IsTextAllowed(string text)
        {
            return int.TryParse(text, out _); // Sprawdza, czy tekst można przekonwertować na liczbę
        }
        public void Ok(object sender, RoutedEventArgs e)
        {
            MessageBox.Show($"Name: {Name.Text}\nEmployment date: {Date.Text}\nDepartment: {Department.Text}\nPosition: {Postion.Text}\nAnnual salary: ${Salary.Text}\nJob description: {Description.Text}");
            this.Close();
        }
        public void Cancel(object sender, RoutedEventArgs e)
        {
            this.Close();
        }
        
    }
}
