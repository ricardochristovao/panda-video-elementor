# Panda Video Elementor Widget
> Um widget personalizado para Elementor que permite incorporar vídeos do Panda Video de forma simples, segura e eficiente.

Uma solução leve e prática para editores que desejam adicionar vídeos do Panda Video sem recorrer ao widget HTML genérico. O widget detecta automaticamente o ID do vídeo a partir do iframe completo ou diretamente do próprio ID, com controles de dimensões e sanitização de entradas para maior segurança.

## 📋 Descrição
O Panda Video Elementor Widget adiciona um widget dedicado ao Elementor para incorporar vídeos hospedados no Panda Video. Basta colar o iframe oficial do Panda Video ou apenas o ID do vídeo, e o widget extrai e utiliza o identificador correto automaticamente. O foco é oferecer uma interface limpa, segura e compatível com as versões modernas do WordPress e Elementor.

## ✨ Características
- **Detecção automática:** aceite o iframe completo ou apenas o ID do vídeo.
- **Interface limpa:** widget dedicado no Elementor, fácil de encontrar e usar.
- **Controles personalizáveis:** ajuste **largura** e **altura** conforme necessário.
- **Segurança:** entradas sanitizadas e verificações de segurança.
- **Compatibilidade:** funciona exclusivamente com vídeos do **Panda Video**.
- **Responsivo:** o iframe se adapta ao container.
- **Fallback:** mensagem clara de erro caso nenhum ID seja fornecido.

## 🚀 Instalação
1. Faça o download do arquivo `panda-video-elementor.php`.
2. Envie para a pasta `/wp-content/plugins/` do seu WordPress.
3. Ative o plugin no painel administrativo do WordPress.
4. Abra o Elementor: o widget **“Panda Video”** estará disponível.

## 📖 Como Usar
1. No Elementor, arraste o widget **“Panda Video”** para a página.
2. No campo de entrada, cole:
   - o **iframe completo** do Panda Video; ou
   - **apenas o ID** do vídeo (ex.: `{ID}`).
3. Ajuste **Largura** e **Altura** (em pixels) conforme o layout.
4. Publique/atualize a página: o vídeo será incorporado automaticamente.

## 🔧 Exemplo de Uso
**Colando o iframe completo:**

    <iframe id="panda-{ID}" src="https://player-vz-cac7a4c5-40e.tv.pandavideo.com.br/embed/?v={ID}" style="border:none;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture" allowfullscreen=true width="720" height="360" fetchpriority="high"></iframe>

**Ou colando apenas o ID:**

    {ID}

Ambos os métodos funcionam perfeitamente.

## ⚙️ Configurações Disponíveis
| Opção            | Tipo   | Padrão | Descrição                                                   |
|------------------|--------|--------|-------------------------------------------------------------|
| Campo de entrada | Texto  | —      | Aceita o iframe completo do Panda Video ou apenas o ID.     |
| Largura          | Número | 720px  | Define a largura do iframe em pixels.                       |
| Altura           | Número | 360px  | Define a altura do iframe em pixels.                        |

## 🔒 Requisitos
- WordPress 5.0+
- Elementor 3.0+
- PHP 7.4+

## 🛠️ Recursos Técnicos
- **Extração automática de ID:** regex para detectar IDs em diferentes formatos.
- **Sanitização:** todos os inputs são filtrados/sanitizados.
- **Responsividade:** o iframe se adapta ao container pai.
- **Fallback:** exibe mensagem de erro quando não há ID válido.

## 📝 Changelog
### Versão 1.0
- Lançamento inicial.
- Suporte para iframe completo e ID do vídeo.
- Controles de largura e altura.
- Detecção automática de ID.

## 👨‍💻 Autor
**Ricardo Christovão da Silva** — [christovao.com.br](https://christovao.com.br)

## 📄 Licença
Distribuído sob a **GPL v2 ou posterior**.

## 🐛 Suporte
Encontrou um bug ou deseja sugerir um recurso? Entre em contato pelo site do autor: [christovao.com.br](https://christovao.com.br)

## 🔄 Contribuições
Contribuições são muito bem-vindas! Sinta-se à vontade para abrir *issues* e enviar *pull requests*.

> Nota: Este plugin foi desenvolvido especificamente para vídeos do **Panda Video** e não funcionará com outras plataformas de vídeo.
