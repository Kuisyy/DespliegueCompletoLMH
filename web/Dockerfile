FROM nginx:latest

# Install openssl
RUN apt-get update && apt-get install -y openssl && rm -rf /var/lib/apt/lists/*

# Copy Nginx configuration
COPY default.conf /etc/nginx/conf.d/default.conf

# Copy entrypoint script and set permissions
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set entrypoint script as default command
CMD ["/entrypoint.sh"]

