   M S B A M L   `   `   `  ����E  Akalkulator, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null'clr-namespace:kalkulator
kalkulator  5   	       kalkulator.MainWindow   5   	   W SPresentationCore, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   *localclr-namespace:kalkulator     5   	     � Title$  
MainWindow��5   	   $	��400��6   $	��700��6)   .��5	      �  � ColumnDefinitions 5
   
   �� 5      $	��100 �6   �� 5      $	��600 �6    � RowDefinitions 5   
   �� 5      �� 5      �� 5      �� 5      �� 5      �� 5      .+�5   
   �� $��0��6   $��0��6!   $��20q�61   $��16(�6=   
liczba a6V   �� 5   
   -   5         ��Name$ a��5      $��0��6   $��1��6*   $��16(�6:   $��30��6H   $	��300��6T   $
��Left=�6`   �� 5   
   $��1��6   $��0��6!   $��20q�61   $��16(�6=   
liczba b6U   �� 5   
   -   5        $ b��5      $��1��6   $��1��6*   $��16(�6:   $��30��6H   $	��300��6T   $
��Left=�6`   	� 5   
   -   5         	�Name$
 plus��5   =   $��2��6   $��20q�6#   $��16(�6/   $��+��6Y   	� 5   
   -   5        $ minus��5   =   $��3��6   $��20q�6#   $��16(�6/   $��-��6Z   	� 5   
   -   5        $
 razy��5   =   $��4��6   $��20q�6#   $��16(�6/   $��*��6Y   	� 5    
   -   5        $ dziel��5    =   $��5��6   $��20q�6#   $��16(�6/   $��/��6Z   �� 5"   
   -   5        $��Zakończ��5"      $��1��6#   $��4��63   $��20q�6@   $	��100��6L   $
��Left=�6X   6s   �� 5$   
   -   5         ��Name$ output��5$      $��16(�6$   $��5��62   $��1��6?   $��30��6O   5&      5'      