Public Class Socios

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click


        Dim conn As New MySql.Data.MySqlClient.MySqlConnection
        Dim connStr As String
        Dim cmd As MySql.Data.MySqlClient.MySqlCommand

        Dim fcmd As MySql.Data.MySqlClient.MySqlCommand
        connStr = "server=127.0.0.1;" _
            & "uid=root;" _
            & "pwd='';" _
            & "database=fissic;"
        Dim socio = TextBox1.Text
        Dim numero = TextBox2.Text



        Dim strDate = Split(DateTimePicker1.Text, "/")

        Dim mes = strDate(1)
        Dim dia = strDate(0)
        Dim año = strDate(2)
        'MsgBox("dia" + dia + "mes " + mes)

        Dim cuota = "normal"
        Try
            conn.ConnectionString = connStr
            conn.Open()



            Dim firstquery = "Select count(*) from socios where `numero`= " + numero

            fcmd = New MySql.Data.MySqlClient.MySqlCommand(firstquery, conn)
            Dim resultado = fcmd.ExecuteScalar()
            If Convert.ToInt32(resultado) = 0 Then
                Dim query = "insert into `socios` (`nombre`, `numero`,`mes`,`dia`,`cuota`,`anio`) values ('" + socio + "','" + numero + "','" + "" + mes + "','" + dia + "','" + cuota + "'," + año + "');"

                cmd = New MySql.Data.MySqlClient.MySqlCommand(query, conn)
                cmd.ExecuteScalar()
            Else
                MsgBox("El número de socio ya existe")
            End If


        Catch ex As Exception
            MessageBox.Show(ex.Message)

        End Try
        Me.Close()

    End Sub

    Private Sub TextBox2_keypressed(sender As Object, e As KeyPressEventArgs) Handles TextBox2.KeyPress


        If Asc(e.KeyChar) <> 8 Then
            If Asc(e.KeyChar) < 48 Or Asc(e.KeyChar) > 57 Then
                e.Handled = True
            End If
        End If
    End Sub


End Class